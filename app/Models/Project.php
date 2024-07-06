<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    //relacion uno a muchos inversa

    public function client(){
        return $this->belongsTo('App\Models\Client');
    }

    //relacion de muchos a muchos
    public function partner(){
        return $this->belongsToMany('App\Models\Partner');
    }

}
