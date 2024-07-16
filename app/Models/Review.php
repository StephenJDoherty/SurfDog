<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['message']; // Allow mass assignment for 'message'

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
