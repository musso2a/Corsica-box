<?php

namespace App\Http\Controllers;

use App\Models\Actuality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;


class NewsController extends Controller
{
    public function showHome(){
        $news = DB::table('actualities')->where('publish',1)->limit(3)->get();
        return view('home')->with('news',$news);
    }

    public function showNew($id){
        $new = DB::table('actualities')->where('id', $id)->first();
        return view('actuality')->with('new', $new);
    }


    public function showServices(){
        $services = DB::table('plans')->get();

        return view('products')->with('$services', $services);
    }

    public function addNew(Request $request){


        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'publish' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $result = $request->main_photo->storeOnCloudinaryAs('corsicabox');

        Actuality::create([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'img' => $result->getSecurePath(),
            'publish' => $request->publish,
        ]);



        return redirect('adminnews');
    }

    public function searchNews(Request $request){
        $request->validate([
            'search_input' => 'required',
        ]);

        $searchNews = DB::table('actualities')->where('title', 'LIKE', "%{$request->search_input}%")->orWhere('full_text', 'LIKE', "%{$request->search_input}%")->get();

        if ($searchNews->total() == 0){
            $searchNews = false;
        }
        return view('research')->with('searchNews', $searchNews);
    }

    public function deleteNew($id){
//        if (session('user') == null){
//            return redirect('');
//        }
//        if (session('user')->is_admin == 0){
//            return redirect('home');
//        };

        DB::table('actualities')->where('id',$id)->delete();
        return redirect('adminnews');
    }

}
