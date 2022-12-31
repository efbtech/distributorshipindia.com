<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    use HasFactory;
    protected $table = 'franchisees';
    protected $fillable = [
        'name',
        'mode',
        'user_id',
        'brand',
        'establishment',
        'total_companies',
        'total_franchisee',
        'space',
        'product_keywords',
        'status',
        'logo'
    ];
}
