<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'street1',
        'street2',
        'city',
        'state',
        'zip'
    ];
}
