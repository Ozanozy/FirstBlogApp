<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $primaryKey = "comment_id";
    protected $fillable  = ["comment_text", "comment_id" , "makale_id"];
}