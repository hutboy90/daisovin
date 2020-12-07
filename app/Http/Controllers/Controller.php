<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\News;
use App\Models\Category;
use App\Models\Order;
use App\Models\Contact;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $news = News::select('news.*', 'categories.slug as category_slug')
                    ->join('categories', 'category_id', 'categories.id')
                    ->where('featured', 1)
                    ->orderBy('id', 'DESC')->limit(3)->get();
        return view('home', [
            'newses' => $news,
            'categories' => Category::all(),
        ]);
    }

    public function rss(){
        $news = News::select('news.*', 'categories.slug as category_slug')
                    ->join('categories', 'category_id', 'categories.id')
                    ->orderBy('id', 'DESC')->limit(10)->get();
        $content = view('rss', [
            'newses' => $news,
        ]);

        return Response::create($content, '200')->header('Content-Type', 'text/xml');
    }

    public function production(Request $request) {
        $slug = $request->slug;
        
        if ($slug == 'dai-so-vin-dai') {
            return view('product_detail_long', ['categories' => Category::all()]);
        } else {
            return view('product_detail_short', ['categories' => Category::all()]);
        }
        
    }

    public function order(Request $request) {
        $params = $request->all();
        $order = Order::create([
            'type'      => $params['type'],
            'number'    => $params['quantity'],
            'full_name' => $params['fullname'],
            'phone_number' => $params['phone']
        ]);
        echo  "<span class='text-success'>
                <span>Cảm ơn bạn đã mua sản phẩm của tôi.</span>
                <span>Bộ phận giao hàng sẽ liên hệ với bạn trong vòng 24h để hoàn tất đơn hàng.</span>
                </span>"; exit();
    }

    public function contact(Request $request) {
        $params = $request->all();
        $contact = Contact::create([
            'full_name'     => $params['contact_name'],
            'email'         => $params['contact_email'],
            'phone_number'  => $params['contact_phone'],
            'content'       => $params['contact_message']
        ]);
        echo  "<span class='text-success'>
                <span>Cảm ơn bạn đã liên hệ với chúng tôi.</span>
                <span>Chúng tôi sẽ trả lời bạn trong vòng 24h.</span>
                </span>"; exit();
    }
}
