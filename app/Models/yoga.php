<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yoga extends Model
{
    protected $fillable = [
        'name',
        'description',
        'experience',
        'address',
        'location',
    ];
    use HasFactory;
}
