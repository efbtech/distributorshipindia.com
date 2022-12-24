<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminBlogModel extends Model
{
    use HasFactory;
    protected $table = 'apr_blogs';
    protected $fillable = [
        'blog_title',
        'blog_slug',
        'blog_image',
        'meta_desc',
        'blog_description',
        'scheduled_date'
    ];
}