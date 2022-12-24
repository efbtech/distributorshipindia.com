<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminMediaModel extends Model
{
    use HasFactory;
    protected $table = 'apr_media';
    protected $fillable = [
        'media_name',
        'media_type',
        'media_path',
        'media_thumb'
    ];
}