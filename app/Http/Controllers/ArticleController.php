<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(){
      
        return view('article/create');

    }
    public function store(Request $request){

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
}
