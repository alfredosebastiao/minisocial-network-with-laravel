<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function getShortContentAttribute(){
        return substr($this->mensagem,0,random_int(60,100)).'...';
    }

    public function emissor(){
        return $this->belongsTo('App\User', 'emissor_id');
    }

    public function receptor(){
        return $this->belongsTo('App\User', 'receptor_id');
    }


}
