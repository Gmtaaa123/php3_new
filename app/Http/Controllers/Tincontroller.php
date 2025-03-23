<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\news;
use Illuminate\Http\Request;

use function Psy\debug;

class Tincontroller extends Controller
{
    //
    public function index(){
        // echo "Đây là trang chủ";
        $news = (new news())->get();
        return view('index', compact('news'));
    }

    public function lay1tin($id){
        $newsdetail = news::find($id);
        return view('chitiet', compact('newsdetail'));
    }

    public function tintronloai($id){
        $news = news::where('category', '=', $id)->get();
        $idcategory = $id;
        return view('tintrongloai',compact('news', 'idcategory'));
    }
}
