<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article as Article;
use App\Type as Type;
use App\Delivery as Delivery;

class ArticleController extends Controller
{
    public function deleteOne(Request $request) 
    {
        Article::destroy($request->input('id'));
        return redirect('/show');
      }

    public function insertOneAction(Request $request) 
    {

        $newArticle = new Article;
        $newArticle->name = $request->input('name');
        $newArticle->reference = $request->input('reference');
        $newArticle->description = $request->input('description');
        $newArticle->price = $request->input('price');
        $newArticle->amount = $request->input('amount');
        $newArticle->type_id = $request->input('type');
        $newArticle->image = $request->input('image');
        $newArticle->save();
        $req = $request->input('deliveries');
        foreach ($req as $key) {
            $newArticle->deliveries()->attach($key);
        }
    }
        

}
