<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QueryModel extends Model
{
    use HasFactory;
    protected $table = 'apr_queries';
    protected $fillable = ['type','fname','lname','email','phone','subject','message'];
}
