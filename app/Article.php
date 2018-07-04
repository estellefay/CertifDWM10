<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    public function type() {
        return $this->belongsTo('App\Type');
    } 

    public function deliverys() {
        return $this->belongsToMany('App\Delivery');
    }
}
