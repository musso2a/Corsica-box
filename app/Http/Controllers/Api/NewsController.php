<?php

namespace App\Http\Controllers\Api;

use App\Models\Actuality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;


class NewsController extends Controller
{


    public function showNew($id){
        $new = DB::table('actualities')->where('id', $id)->first();
        return response()->json([$new], 200);
    }


    public function showServices(){
        $services = DB::table('plans')->get();

        return view('products')->with('$services', $services);
    }


}
