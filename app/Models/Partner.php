<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    //Relación muchos a muchos
    public function Project(){
        return $this-> belongsToMany('App\Models\Project');
    }
}
