<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NewsController extends Controller
{
//    public function showHome(){
//        $news = DB::table('actuality')->where('publish',1)->limit(3)->get();
//        return view('home')->with('news',$news);
//    }

    public function showNew($id){
        $new = DB::table('actuality')->where('id', $id)->first();
        return view('actuality')->with('new', $new);
    }


    public function showServices(){
        $services = DB::table('plans')->get();

        return view('products')->with('$services', $services);
    }
}
