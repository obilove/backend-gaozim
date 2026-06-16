<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'code',
        'status',
        'business',
        'warehouse_capacity',
        'image',
        'username',
        'address',
        'location',
        'badge',
    ];

    /**
     * Orders Relationship
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
