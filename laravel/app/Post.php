<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    public function comp()
    {
        return $this->hasOne('App\comp');
    }
}