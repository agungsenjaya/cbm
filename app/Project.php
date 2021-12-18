<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['title','img','content','slug','user_id','kategori'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
