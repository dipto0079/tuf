<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homes extends Model
{
    use HasFactory;

    protected $fillable = [
        'text_1',
        'text_2',
        'text_3',
        'image'
    ];
}
