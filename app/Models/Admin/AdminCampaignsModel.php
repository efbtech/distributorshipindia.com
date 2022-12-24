<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminCampaignsModel extends Model
{
    use HasFactory;
    protected $table = 'apr_campaigns';
    protected $fillable = [
        'campaigns_title',
        'campaigns_slug'
    ];
}