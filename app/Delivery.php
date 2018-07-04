<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    public function articles2() {
        return $this->hasManyTo('App\Article');
    }
}
