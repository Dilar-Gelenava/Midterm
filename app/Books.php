<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable=[
    	"title","author_name", "description", "image", "genre_id"
    ];
}
