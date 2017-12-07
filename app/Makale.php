<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makale extends Model
{
    protected $table = "makaleler";
    protected $primaryKey = "makale_id";
    protected $fillable  = ["baslik" , "yazi", "sahip_id" , "image"];

}