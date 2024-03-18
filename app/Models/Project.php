<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'title',
        'description',
        'financial_goal',
        'fund_collected',
        'user_id',
        'start_date',
        'end_date',
        'image',
        'status'
    ];

    public function users() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
