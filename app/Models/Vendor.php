<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Vendor extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [

        'name',
        'code',
        'status',
        'user_type',
        'account_type',
        'business',
        'delivery_capacity',
        'ave_size',
        'item_cat',
        'biz_cat',
        'image',
        'username',
        'address',
        'location',
        'badge',
        'coin',
        'dispatch_count',
        'waste_count',
        'email',
        'phone',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Orders Relationship
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}