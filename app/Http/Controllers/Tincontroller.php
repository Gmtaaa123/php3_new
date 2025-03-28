<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Tincontroller extends Controller
{

    //
    public function index(){
        //Tin xem nhiều
        $moreNewss = news::orderBy('views', 'desc')->limit(10)->get();

        //tin mới nhất
        $NewsNews = news::orderBy('created_at', 'desc')->limit(10)->get();

        //danh mục
        $categories = category::all();

        return view('news', compact('moreNewss', 'NewsNews', 'categories'));
    }

    public function newsCate($id){

        //danh mục
        $categories = category::all();

        //tin tức theo danh mục
        $newsCates = DB::table('news')
        ->where('category', '=', $id)->get();

        return view('newsCategory', compact('newsCates', 'categories'));
    }

    public function newsDetail($id){
        //danh mục
        $categories = category::all();

        $newsDetail = news::find($id);

        return view('newsDetail', compact('newsDetail','categories'));
    }

}

