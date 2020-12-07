<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\News;
use App\Models\Category;
use App\Constant;

class NewsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request, $category=""){
        $categoryID = 0;
        $categoryModel = NULL;
        if ($category) {
            $categoryModel = Category::where('slug', $category)->first();
            if ($categoryModel) {
                $categoryID = $categoryModel['id'];
            }
        }
        $keyword = $request->input('keyword');
        $newses = new News();
        $newses = $newses->select('news.*', 'categories.slug as category_slug')
                        ->join('categories', 'category_id', 'categories.id');
        if ($keyword) {
            $newses = $newses->where('title', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('description', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('content', 'LIKE', '%'.$keyword.'%');
        }

        if ($categoryID) {
            $newses = $newses->where('category_id', $categoryID);
        }

        $newses = $newses->orderBy('id', 'DESC')->paginate(Constant::PAGE_NUMBER);
        
        $related_news = News::select('news.*', 'categories.slug as category_slug')
                            ->join('categories', 'category_id', 'categories.id')
                            ->where('featured', 1);
        $related_news = $related_news->orderBy('id', 'DESC')->limit(3 )->get();

        return view('news/index', [
            'newses'        => $newses,
            'related_newses'=> $related_news,
            'categories' => Category::all(),
            'pageTitle'     => $categoryModel ? $categoryModel['title'] : 'Tin tức',
            'pageSlug'      => $categoryModel ? $categoryModel['slug'] : 'tin-tuc',
            'seoKeyword'    => $categoryModel ? $categoryModel['seo_keyword'] : Constant::SEO_KEYWORD,
            'seoDescription'=> $categoryModel ? $categoryModel['seo_description'] : Constant::SEO_DESCRIPTION,
        ]);
    }

    /**
     * Slug of category and slug of news
     */
    public function detail(Request $request, $categor="", $slug=""){
        $slug = $request->slug;
        $news = News::join('categories', 'category_id', 'categories.id')
                    ->select('news.*', 'categories.slug as category_slug', 'categories.title as category_title')
                    ->where('news.slug', $slug)->first();
        $query = DB::table('news')
                        ->join('categories', 'category_id', 'categories.id')
                        ->select('news.*', 'categories.slug as category_slug', 'categories.title as category_title')
                        ->where([['category_id', $news->category_id], ['news.id', '!=', $news->id]]);
        $related_featured_newses = $query->where([['featured', 1]])
                                    ->orderBy('id', 'DESC')->limit(3)->get();

        
        $related_news = $query->orderBy('id', 'DESC')->limit(4)->get();

        return view('news/detail', [
            'news'              => $news,
            'categories' => Category::all(),
            'related_newses'    => $related_news,
            'related_featured_newses' => $related_featured_newses,
            'pageTitle'     => $news['title'],
            'pageSlug'      => genNewsLink($news->category_slug, $news->slug),
            'seoKeyword'    => $news['seo_keyword'] ?$news['seo_keyword'] : Constant::SEO_KEYWORD,
            'seoDescription'=> $news['description'] ? html_entity_decode($news['description']) : Constant::SEO_DESCRIPTION,
        ]);
    }

    public function tag(Request $request, $keyword){
        $newses = new News();
        if ($keyword) {
            $keyword = str_replace('-', ' ', $keyword);
            $newses = $newses->where('title', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('description', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('content', 'LIKE', '%'.$keyword.'%');
 
        }
        $newses = $newses->orderBy('id', 'DESC')->paginate(Constant::PAGE_NUMBER);
        
        $related_news = News::where('featured', 1);
        $related_news = $related_news->orderBy('id', 'DESC')->limit(3 )->get();

        return view('news/index', [
            'newses' => $newses,
            'related_newses' => $related_news
        ]);
    }

}
