<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        $title = "Welcome to Zenblog";
        $nav_category = Category::all();
        $side_news = News::inRandomOrder()->limit(4)->get();
        $slider = Slider::all();

       return view('frontend.index', compact('news', 'nav_category', 'side_news', 'title', 'slider'));
    }


    public function detailCategory($slug)
    {
        $category   = Category::where('slug', $slug)->first();
        $title = "Berita Zen";
        $news       = News::where('category_id', $category->id)->paginate(10);
        $nav_category = Category::all();
        $side_news = News::inRandomOrder()->limit(4)->get();

        return view('frontend.detail-category', compact('news', 'nav_category', 'side_news', 'title'));
    }

    public function detailNews($slug)
    {
       
        $news   = News::where('slug', $slug)->first();
        $text = News::findOrFail($news->id)->title;
        $title = "Berita - $text";
        $nav_category = Category::all();
        $side_news = News::inRandomOrder()->limit(4)->get();
        

        return view('frontend.detail-news', compact('news', 'nav_category', 'side_news', 'title'));
    }

    public function searchNewsEnd(Request $request)
    {
        $keyword = $request->keyword;
        $news = News::where('title', 'like', '%' . $keyword . '%')->paginate(10);
        $title = "Welcome to zenblog";
        $nav_category = Category::all();
        $side_news = News::inRandomOrder()->limit(4)->get();
        $slider = Slider::all();

        return view('frontend.index', compact('news', 'title', 'nav_category', 'side_news', 'slider'));

    }
}
