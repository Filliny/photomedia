<?php


namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Tag;
use Illuminate\Http\Request;

class MainController extends \Illuminate\Routing\Controller
{
    private string $start_area_category = 'Photoshop'; //todo add in admin settings start area category

    public function index(Request $request){

        if($request->search){
            $search = $request->search;
            $articles = Article::where('name', 'LIKE', '%'.$search.'%')
                ->orWhere('content', 'LIKE', '%'.$search.'%')->get();

            return view('content.categories',compact('articles',));
        }

        $menus = Menu::all();
        $categories = Category::all();
        $tags= Tag::all()->shuffle()->take(5);
        $category = Category::where('name','=',$this->start_area_category)->first();
        $start_area_articles = Article::where('category_id','=',$category->id)->where('published','=',1)->take(2)->get();
        $last_articles = Article::orderByDesc('created_at')->with(['category','tags'])->where('published','=',1)->take(6)->get();
        //dd($menus[2]->name, $menus[2]->parent);
        return view('home',compact('menus','categories','start_area_articles','tags','last_articles'));
    }

    public function category(Category $category){

        $articles = Article::where('category_id','=',$category->id)->where('published','=',1)->paginate(9);

        return view('content.categories',compact('articles'));
    }

    public function article(Article $article){

        return view('content.article',compact('article'));
    }

    public function tag(Tag $tag){
        $articles = $tag->articles()->get();

        return view('content.categories',compact('articles'));
    }
}
