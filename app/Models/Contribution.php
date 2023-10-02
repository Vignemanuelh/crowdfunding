<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use HasFactory;

    protected $table = 'contributions';

    protected $filleable = [
        'amount',
        'identity',
        'project_id',
        'email',
        'phone',
        'card_number',
        'payment_status',
        'payment_details',
        'status'
    ];
}
