<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'mode',
        'gst',
        'pan',
        'brand',
        'establishment',
        'anualsale_start',
        'anualsale_end',
        'anualsale_unit',
        'total_distributors',
        'space',
        'logo',
        'address',
        'city',
        'state',
        'zip',
        'about'
    ];
}
