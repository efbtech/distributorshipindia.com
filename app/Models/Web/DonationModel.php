<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationModel extends Model
{
    use HasFactory;
    protected $table = 'apr_donations';
    protected $fillable = [
        'type',
        'amount',
        'transaction_id',
        'donation_type',
        'doner_name',
        'doner_email',
        'payment_id',
        'payment_status'
    ];
}