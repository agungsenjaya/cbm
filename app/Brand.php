<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['title','img','slug','user_id'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
