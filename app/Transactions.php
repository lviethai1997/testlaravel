<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table = 'transactions';
    protected $fillable =['*'];

    public function user()
    {
        return $this->belongsTo('App\Users');
    }
}
