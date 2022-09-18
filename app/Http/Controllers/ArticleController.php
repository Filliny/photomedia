<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extends = Auth::user()->role === 'admin'?'admin.dashboard':'dashboard';

        if(Auth::user()->role === 'admin'){
            $articles = Article::paginate(2);
        }else{
            $articles = Article::where('user_id','=',Auth::user()->id)->paginate(3);
        }

        return view('user.articles.index',compact('articles','extends'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $extends = Auth::user()->role === 'admin'?'admin.dashboard':'dashboard';
        $tags = Tag::all();
        return view('user.articles.create',compact('categories','tags','extends'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|',
            'content'=>'required',
            'category'=>'exists:categories,id'
        ]);

        $all = $request->all();
        $all['user_id']=Auth::user()->id;
        $article = Article::create($all);

        $article->tags()->sync($request->tag);

        return to_route('articles.index')->with('success',$article->name." post created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {

        $categories = Category::all();
        $tags= Tag::all();
        session(['return_to' => url()->previous()]); //to return from previous
        $extends = Auth::user()->role === 'admin'?'admin.dashboard':'dashboard';

        return view('user.articles.edit',compact('article','categories','tags','extends'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'name'=>'required|min:3|',
            'content'=>'required',
            'category'=>'exists:categories,id'
        ]);


        $article->update($request->all());
        $article->update([
            'published'=>isset($request->published)
        ]);
        $return = session('return_to');
        $article->tags()->sync($request->tag);
        //return to_route('admin.articles.index')->with('success','Article updated');
        return redirect($return)->with('success','Article updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return to_route('articles.index');
    }
}
