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
        return redirect('/show');
    }

    public function updateOneAction(Request $request) 
    {
        $updateArticle = Article::find($request->input('id'));
        $updateArticle->name = $request->input('name');
        $updateArticle->reference = $request->input('reference');
        $updateArticle->description = $request->input('description');
        $updateArticle->price = $request->input('price');
        $updateArticle->amount = $request->input('amount');
        $updateArticle->type_id = $request->input('type');
        $updateArticle->image = $request->input('image');
        $updateArticle->save();

        if ($request->input('deliveries') !== null) {
            $updateArticle->deliveries()->detach();     
            $req = $request->input('deliveries');
            foreach ($req as $value) { 
                $updateArticle->deliveries()->attach($value); 
            } 
            
        } else {
                return redirect('/show');
            }

        return redirect('/show');
    }

    public function updateAmountAction(Request $request)
    {      
        $updateArticleAmount = Article::find($request->input('id'));
        $updateArticleAmount->amount = $request->input('amount');
        $updateArticleAmount->save();
        return redirect('/stock');

    }
}
