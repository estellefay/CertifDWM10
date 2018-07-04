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
        dd(Delivery::all());


        $articles = Article::all()->load('type');
        return view('articles.show', ['articles' => $articles]);
    }

}
