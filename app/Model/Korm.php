<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Korm extends Model
{
    protected $fillable = [
        'title', 'description', 'email', 'password',
    ];

    function imgkorm(){

        return $this->hasMany('Baum\Node');

    }
}
