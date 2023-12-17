<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clint extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'email',
        'number',
        'address',
        'country',
        'state',
        'city',
        'zip'

    ];


}
