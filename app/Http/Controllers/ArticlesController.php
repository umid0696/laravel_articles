<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ArticlesController extends Controller{

    /*
public function index(){
   return Article::all();
//    $articles=Article::all();
 //   return view('pages.test', ['articles'=>$articles]);
}

public function show(Article $article){
    //return Article::find($id);
    return $article;
}

public function store(Request $request)
    {
        Article::create($request->all());
        return response()->json($article, 201);        
    }
        
    public function update(Request $request, Article $article)
    {
        $article->update($request->all());
        return response()->json($article, 200);
    }

    public function delete(Request $request, Article $article)
    {
        $article->delete();
        return response()->json(null, 204);
    }

    */
    
    public function showArticles (){   
        //$articles=Article::all();
        return view('pages.articles');
    }

    /*
    public function showArticles (){   
        $articles=Article::all();
        return view('pages.articles', ['articles'=>$articles]);
    }

    public function showArticle ($id){        
        $articles=Article::find($id);
        return view('pages.articles/', ['articles'=>$articles]);
    }

    public function show1 (){
        
        $articles=DB::table('articles')->get();
        return view('pages.test', ['articles'=>$articles]);
    }

    public function addArticles(){
        return view('pages.addArticles');
    }

    /*
    public function getArticles(id){
    }
*/


}