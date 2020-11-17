<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetectionThreshold extends Model
{
    protected $table = "detection_thresholds";

    protected $fillable = [
        'time_interval',
        'bandwidth',
        'status',
        'status_frequency',
    ];

//    protected $casts = [
//        'time_interval' => 'double',
//        'bandwidth' => 'double',
//        'status' => 'double',
//        'status_frequency' => 'double',
//    ];
}
