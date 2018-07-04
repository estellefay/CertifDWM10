<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article as Article;
use App\Type as Type;
use App\Delivery as Delivery;


class NavController extends Controller
{
    public function home()
    {
       // dd(Article::all());
        return view('articles.home');
    }

    public function show() 
    {
        $articles = Article::all()->load('type', 'deliveries');
        return view('articles.show', ['articles' => $articles]);
    }

    public function insertOne() 
    {
        $types = Type::all();
        $deliveries = Delivery::all();
       return view('articles.insertOne', ['types' => $types, 'deliveries' => $deliveries]);
    }

    public function updateOne(Request $request) 
    {
        $article = Article::find($request->input('id'));
        $types = Type::all();
        $deliveries = Delivery::all();
        return view('articles.updateOne', ['article' => $article, 'types' => $types, 'deliveries' => $deliveries]);
        
    }

}
