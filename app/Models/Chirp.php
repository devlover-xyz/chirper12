<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    /**
     * Get the user that owns the chirp.
     * chirp dimiliki oleh user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
