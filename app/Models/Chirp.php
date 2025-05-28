<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
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
