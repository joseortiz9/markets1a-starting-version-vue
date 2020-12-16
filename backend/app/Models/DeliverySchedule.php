<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliverySchedule extends Model
{
    use HasFactory;

    protected $fillable = ['start_time', 'finish_time'];

    protected $casts = [
        'start_time' => 'time',
        'finish_time' => 'time'
    ];
}
