<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Waybill extends Model
{
    use HasFactory;

    public function shipment(): BelongsTo
    {
        return $this->belongsTo(Shipment::class);
    }
}
