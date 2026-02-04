<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupLog extends Model
{
    use HasFactory;

    protected $fillable = ['pickup_request_id', 'status', 'notes'];

    // Relasi ke PickupRequest
    public function pickupRequest()
    {
        return $this->belongsTo(PickupRequest::class);
    }
}
