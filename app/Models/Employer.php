<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

   protected $fillable = ['name'];

//    this a relationship method btw employer and many jobs
   public function job(){
    return $this -> hasMany(Job::class);
   }
}

