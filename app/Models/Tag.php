<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['tags']; // Allow mass assignment for the 'tags' attribute

    protected $casts = [
        'tags' => 'array', // Automatically cast 'tags' attribute to array
    ];
}
