<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veflix extends Model
{
    use HasFactory;

    protected $fillable = ['title','image','synopsis','duration','genre','rating'];

}
