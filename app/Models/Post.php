<?php

namespace APP\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{ 
  protected $fillable = ['title', 'author', 'slug', 'body'];
 }

