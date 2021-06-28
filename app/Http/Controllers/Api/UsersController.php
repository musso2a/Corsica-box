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
    public function index(Request $request){
        $user = auth()->user();
        return view('admin', compact('user'));
    }

    public function showNews(){
        $News = DB::table('actualities')->get();

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

    public function updateUser(Request $request){

        $request->validate([
            'name' => 'required',
            'first_name' => 'required',
            'email' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'adresse' => 'required',
        ]);

        $user = auth()->user();

        User::where('id', $user->id)
            ->update(['name' => $request->name]);

        User::where('id', $user->id)
            ->update(['first_name' => $request->first_name]);

        User::where('id', $user->id)
            ->update(['email' => $request->email]);

        User::where('id', $user->id)
            ->update(['adresse' => $request->adresse]);

        User::where('id', $user->id)
            ->update(['city' => $request->city]);

        User::where('id', $user->id)
            ->update(['postal_code' => $request->postal_code]);


        return view('admin', compact('user'));
    }
}
