<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use App\Http\Resources\Post as ArticleResource;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$articles= Article::paginate(15);
        $articles=Article::all();

        return ArticleResource::collection($articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article= $request->isMethod('put') ? Article::findOrFail($request->article_id) :new Article;

        $article->id=$request->input('article_id');
        $article->title=$request->input('title');
        $article->description=$request->input('description');

        if($article->save()){
            return new ArticleResource($article);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article= Article::findOrFail($id);
        return new ArticleResource($article);
    }
    
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articles= Article::paginate(15);
        if($article->delete()){
            return new ArticleResource($article);
        }
        
    }
}
