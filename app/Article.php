<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Delivery as Delivery;

class Article extends Model
{
    public function type() {
        return $this->belongsTo('App\Type');
    } 

    public function deliveries() {
        return $this->belongsToMany('App\Delivery');
    }
}
