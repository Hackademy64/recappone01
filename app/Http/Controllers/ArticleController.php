<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create(){
      
        return view('article/create');

    }
    public function store(ArticleRequest $request){

            $articles = Article::create(

            [
                'title' =>$request->input('title'),
                'brand' =>$request->input('brand'),
                'model' =>$request->input('model'),
                'body' =>$request->input('body'),
                'img' =>$request->has('img') ? $request->file('img')->store('public') : '/img/default.jpg'
            ]
            );


       // dd($articles);
      return redirect()->route('homepage')->with('message' , 'Grazie per aver condiviso la tua passione con noi. SK8Forever.');

    }

        public function details($title){

            $article = Article::where('title' , $title)->first();
            return view('article/detail' , compact('article'));
        }

        public function update(Article $article){
          return view('article/update' , compact('article'));
        }

            public function edit(Request $request, Article $article){
                    $article->title = $request->title;
                    $article->brand = $request->brand;
                    $article->model = $request->model;
                    $article->body = $request->body;
                    $article->save();
                    return redirect(route('homepage' , compact('article')));


            }

            public function destroy(Article $article) {
                $article->delete();
                return redirect(route('homepage'));

            }


}
