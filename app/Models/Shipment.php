<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shipment extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'address',
        'phone'
    ];
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function related(): HasMany
    {
        return $this->hasMany(Waybill::class);
    }
}
