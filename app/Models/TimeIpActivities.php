<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeIpActivities extends Model
{
    use HasFactory;

    protected $table = "time_ip_activities";

    protected $fillable = [
        "start_time",
        "end_time",
    ];
}
