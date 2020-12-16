<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'shipment_address',
        'shipment_date',
        'shipment_period_start',
        'shipment_period_end',
        'cost',
        'size_package',
    ];

    protected $casts = [
        'shipment_date' => 'datetime',
        'shipment_period_start' => 'time',
        'shipment_period_end' => 'time'
    ];

    public function order(): BelongsTo {
        return $this->belongsTo(Order::class);
    }
}
