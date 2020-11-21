<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuspiciousHost extends Model
{
    use HasFactory;

    protected $table = "suspicious_host";

    protected $fillable = [
        "hosts"
    ];
}
