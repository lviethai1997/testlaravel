<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Products extends Model
{
    protected $table = 'products';
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo('App\Categories');
    }


}
