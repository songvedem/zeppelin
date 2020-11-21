<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BandwidthHost extends Model
{
    use HasFactory;
    protected $table = "bandwidth_host";

    protected $fillable = [
        "host"
    ];
}
