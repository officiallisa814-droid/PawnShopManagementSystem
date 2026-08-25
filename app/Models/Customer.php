<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $table = 'customer';
    public $timestamps = false; // Keeps Laravel from looking for timestamps

    protected $fillable = [
        'name',
        'passport_type',
        'passport',
        'id_expiry_date',
        'phone',
        'phone_2',
        'address',
        'emergency_name',
        'emergency_phone',
        'pledge',
        'note',
        'profile_photo',
        'id_image',
        'status'
    ];
    // use HasFactory;
}
