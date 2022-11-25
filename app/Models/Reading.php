<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    use HasFactory;

    protected $fillable = [
        'reader_id',
        'consumer_id',
        'reading',
        'reading_date',
        'bill',
        'date_paid',
        'due_date',
        'service_period'
        ];
    
        protected $primaryKey = 'reading_id';
}
