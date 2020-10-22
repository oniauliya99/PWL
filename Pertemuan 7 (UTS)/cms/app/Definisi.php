<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Definisi;
class Definisi extends Model
{
    protected $fillable = ['id','judul','konten','link'];

}
