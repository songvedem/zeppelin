<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSummary extends Model
{
    use HasFactory;

    protected $table = "time_summary";

    protected $fillable = [
        "start_time",
        "end_time",
    ];
}
