<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupItem extends Model
{
    use HasFactory;

    protected $fillable = ['pickup_request_id', 'item_name', 'quantity'];

    // Relasi ke PickupRequest
    public function pickupRequest()
    {
        return $this->belongsTo(PickupRequest::class);
    }
}
