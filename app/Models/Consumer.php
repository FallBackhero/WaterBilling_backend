<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    use HasFactory;

    protected $fillable = [
    'user_key',
    'firstname',
    'middlename',
    'lastname',
    'gender',
    'birthdate',
    'phone_number',
    'civil_status',
    'name_of_spouse',
    'barangay',
    'purok',
    'household_no',
    'first_reading',
    'consumer_type',
    'serial_no',
    'brand',
    'status',
    'registered_at'
    ];

    protected $primaryKey = 'consumer_id';
}
