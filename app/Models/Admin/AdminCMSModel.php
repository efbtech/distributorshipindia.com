<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminCMSModel extends Model
{
    use HasFactory;
    protected $table = 'apr_cms';
    protected $fillable = [
        'type',
        'content',
    ];
}
