<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Article as Article;

class Delivery extends Model
{
    public function articles() {
        return $this->hasManyTo('App\Article');
    }
}
