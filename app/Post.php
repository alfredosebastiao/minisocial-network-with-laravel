<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id','content'
    ];


    public function getShortContentAttribute(){
        return substr($this->content,0,random_int(60,150)).'...';
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
