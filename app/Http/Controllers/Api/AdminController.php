<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function AdminNews(){
        $adminNews = DB::table('actualities')->get();

        return view('adminnews')->with('adminNews', $adminNews);
    }

    public function showDashboard(){
        $allUsers = DB::table('users')->get();
        return view('admindashboard')->with('allUsers', $allUsers);
    }

    public function deleteUser($id){
//        $this->checkIsConnected();
//        $this->checkIsAdmin();

        $delete = DB::table('users')->where('id', $id)->delete();
        return redirect('admin');
//        return view('admin');
    }



    public function adminProducts(){
        $products = DB::table('plans')->get();

        return view('adminplans')->with('products', $products);
    }

    public function newsForm(){

        return view('newsform');
    }

}
