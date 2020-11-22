<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = "notifications";

    const IN_READ = 0;
    const READ = 1;

    protected $fillable = [
        "content",
        "status"
    ];
}
