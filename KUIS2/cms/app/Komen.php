<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Komen;
class Komen extends Model
{
    protected $fillable = [
         'author', 'text','id_article','featured_image',
    ];
}
