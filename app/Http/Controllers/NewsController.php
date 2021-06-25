<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NewsController extends Controller
{
    public function showHome(){
        $news = DB::table('actuality')->where('publish',1)->limit(3)->get();
        return view('home')->with('news',$news);
    }

    public function showNew($id){
        $new = DB::table('actuality')->where('id', $id)->first();
        return view('actuality')->with('new', $new);
    }


    public function showServices(){
        $services = DB::table('plans')->get();

        return view('products')->with('$services', $services);
    }

    public function addNew(Request $request){


        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'text_description' => 'required',
            'full_text' => 'required',
            'publish' => 'required',
        ]);

        $countNews = DB::table('news')->latest('id')->first();


//        if ($result){
//            DB::table('news')->insert([
//                'title' => $request->title,
//                'date' => $request->date,
//                'text_description' => $request->text_description,
//                'full_text' => $request->full_text,
//                'publish' => $request->publish,
//                'autor' => session('user')->name,
//                'url' => $result->getSecurePath(),
//            ]);
//        }

        return redirect('adminnews');
    }

    public function deleteNew($id){
//        if (session('user') == null){
//            return redirect('');
//        }
//        if (session('user')->is_admin == 0){
//            return redirect('home');
//        };

        DB::table('news')->where('id',$id)->delete();
        return redirect('adminnews');
    }

}
