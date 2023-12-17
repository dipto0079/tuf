<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'facebook_url',
        'twitter_url',
        'linked_in_url',
        'other_url',
        'image',
        'status'
    ];
}
