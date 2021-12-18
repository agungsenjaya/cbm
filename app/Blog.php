<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = ['title','img','content','slug','user_id','kategori'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
