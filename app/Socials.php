<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socials extends Model
{
    protected $fillable = ['socials_id', 'socials', 'user_id'];

    function user(){
        return $this->belongsTo(User::class);
    }
}
