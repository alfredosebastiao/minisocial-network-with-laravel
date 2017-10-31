<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function emissor(){
        return $this->belongsTo('App\User', 'emissor_id');
    }

    public function receptor(){
        return $this->belongsTo('App\User', 'receptor_id');
    }


}
