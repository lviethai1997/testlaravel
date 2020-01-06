<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = ['*'];

    public function category()
    {
        return $this->belongsTo('App\Categories');
    }

    public function order()
    {
        return $this->belongsTo('App\Orders');
    }

}
