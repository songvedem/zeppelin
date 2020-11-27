<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NotificationResource;
use App\Models\Notification;
use Illuminate\Http\Request;

class ApiNotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::orderByDesc('id')->get();

        return [
            "status" => 200,
            "data" => NotificationResource::collection($notifications),
            "count" => $notifications->where('status', Notification::IN_READ)->count()
        ];
    }

    public function update($id) {
        $notification  = Notification::find($id);

        if ($notification) {
            $notification->status = Notification::READ;
            $notification->save();
        }

        return redirect('/anomalies-detection');
    }
}
