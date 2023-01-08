<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salesagent extends Model
{
    use HasFactory;
    protected $fillable = [
        'business_profile',
        'product_detail',
        'user_id',
        'location',
    ];
}
