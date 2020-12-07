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

class NewsAdminController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request){
        $newses = new News();
        $newses = $newses->orderBy('id', 'DESC')->paginate(100);
        
        return view('news-admin/index', [
            'newses' => $newses,
        ]);
    }

    public function detail(Request $request){
        $slug = $request->slug;
        $news = News::where('slug', $slug)->first();
        
        $related_news = DB::table('news')->where('featured', 1);
        $related_news = $related_news->orderBy('id', 'DESC')->limit(3 )->get();

        return view('news/detail', [
            'news' => $news,
            'related_newses' => $related_news
        ]);
    }

    public function create(Request $request){
        $method = $request->method();

        if ($request->isMethod('post')) {
            $params = $request->all();
            $news = News::create([
                'title'         => $params['title'],
                'slug'          => $params['slug'],
                'thumbnail'     => $params['thumbnail'],
                'description'   => $params['description'],
                'content'       => $params['content'],
                'featured'      => $params['featured'],
                'category_id'   => $params['category_id'],
                'seo_keyword'   => $params['seo_keyword'],
            ]);

            if ($news) {
                $request->session()->flash('status', 'News was successful!');
            }
        }

        return view('news-admin/create', [
            'categories' => Category::all()
        ]);
    }

    public function edit(Request $request, $id){
        $method = $request->method();
        $news = News::where('id', $id)->first();

        if ($request->isMethod('post')) {
            $params = $request->all();
            $news->update([
                'title'         => $params['title'],
                'slug'          => $params['slug'],
                'thumbnail'     => $params['thumbnail'],
                'description'   => $params['description'],
                'content'       => $params['content'],
                'featured'      => $params['featured'],
                'category_id'   => $params['category_id'],
                'seo_keyword'   => $params['seo_keyword']
            ]);

            if ($news) {
                $request->session()->flash('status', 'Update successful!');
                return redirect(sprintf("/news212264611@/%s", $news['id']));
            }
        }

        return view('news-admin/edit', [
            'news'=> $news,
            'categories' => Category::all()
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
