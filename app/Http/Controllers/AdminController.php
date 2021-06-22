<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function AdminNews(){
        $adminNews = DB::table('actuality')->paginate(2);

        return view('adminnews')->with('adminNews', $adminNews);
    }

    public function adminProducts(){
        $products = DB::table('plans')->get();

        return view('adminplans')->with('products', $products);
    }
}
