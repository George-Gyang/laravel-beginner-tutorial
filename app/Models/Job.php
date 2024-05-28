<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
   use HasFactory;
   protected $table = 'job_listings';
   protected $fillable = ['name', 'salary'];


//    this is a relationship btw a job and the employer

   public function employer()
   {
      return $this->belongsTo(Employer::class);
   }
}
