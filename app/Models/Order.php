<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Carrier;

class Order extends Model
{
    protected $fillable = [

        'uuid',
        'user_id',
        'vendor_id',
        'carrier_id',
        'warehouse_id',

        'sender',
        'sender_address',
        'sender_phone',
        'sender_email',

        'receiver',
        'receiver_address',
        'receiver_phone',
        'receiver_email',

        'delivery_type',
        'tracker',
        'item',
        'fragile',
        'image',
        'item_size',
        'pickup_request_id',
        'duration',
        'expected_delivery_date',
        'status',

        'slat',
        'slog',
        'rlat',
        'rlog',

        'route',
        'process',

        'payment_type',

        'worth',
        'amount',
    ];

    protected $casts = [
        'route' => 'array',
        'process' => 'array',
        'fragile' => 'boolean',
    ];

    /**
     * User Relationship
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Vendor Relationship
     */
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    /**
     * Carrier Relationship
     */
    public function carrier()
    {
        return $this->belongsTo(Carrier::class);
    }

    /**
     * Warehouse Relationship
     */
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}