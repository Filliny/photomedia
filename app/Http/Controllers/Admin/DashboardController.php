<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){


        return view('admin.dashboard');
    }

    public function user_index(){

        $articles =  Article::orderByDesc('created_at')->where('user_id','=',Auth::user()->id)->with(['category','tags'])->take(3)->get();
        return view('user.overview',compact('articles'));
    }
}
