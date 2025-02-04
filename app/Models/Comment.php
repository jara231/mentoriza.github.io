<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function commentable(){
        return $this->morphTo();
    }

     //Relacion uno s muchos inversa

      public function user(){
        return $this->belongsTo('App\Models\User');
      }

    //Relacion uno a muchos polimorfica

    public function comments(){
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    public function reactions(){
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }
}
