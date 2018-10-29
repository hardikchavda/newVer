<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userinfo extends Model
{
    //protected $fillable = ['firstname','lastname'];
    protected $guarded = [];
    protected  $table = 'userinfo'; //Overriding name of table
    
    
}
