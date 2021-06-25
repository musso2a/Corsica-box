<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Laravel\Cashier\Cashier;

class UsersController extends Controller
{
//    public function checkIsConnected(){
//        if (session('user') == null){
//            return redirect('');
//        }
//    }
//    public function checkIsAdmin(){
//        if (session('user')->is_admin == 0){
//            return redirect('home');
//        }
//    }
    public function showNews(){
        $News = DB::table('actuality')->get();

        return view('news')->with('News', $News);
    }

    public function showUsers(){
//        $this->checkIsConnected();
//        $this->checkIsAdmin();
        $allUsers = DB::table('users')->get();
        return view('admin')->with('allUsers', $allUsers);
    }

    public function deleteUser($id){
//        $this->checkIsConnected();
//        $this->checkIsAdmin();

        $delete = DB::table('users')->where('id', $id)->delete();
        return redirect('admin');
//        return view('admin');
    }
}
