<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'feedback'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
