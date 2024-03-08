<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'title',
        'description',
        'financial_goal',
        'min_contribution',
        'user_id',
        'start_date',
        'end_date',
        'image',
        'status'
    ];
}
