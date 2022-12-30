<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listing_cat extends Model
{
    use HasFactory;
    protected $table = 'listing_cat';
    protected $fillable = ['listing_id'];
}
