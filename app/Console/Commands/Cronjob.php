<?php

namespace App\Console\Commands;

use App\Events\MyEvent;
use App\Events\Noti;
use App\Models\BandwidthHost;
use App\Models\DetectionThreshold;
use App\Models\Notification;
use App\Models\SuspiciousHost;
use Carbon\Carbon;
use Illuminate\Console\Command;
class Cronjob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'noti:push';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
         $bandwidthHosts = BandwidthHost::whereBetween('created_at', [now()->subMinutes(1), now()])->get();

        $suspiciousHosts = SuspiciousHost::whereBetween('created_at', [now()->subMinutes(1), now()])->get();

        foreach ($bandwidthHosts as $bandwidthHost) {
            $notify = Notification::create([
                "content" => "Found bandwidth hosts from {$bandwidthHost->start_time} to {$bandwidthHost->end_time}",
                "status" => Notification::IN_READ
            ]);
        }

        foreach ($suspiciousHosts as $suspiciousHost) {
            $notify = Notification::create([
                "content" => "Found suspicious hosts from {$suspiciousHost->start_time} to {$suspiciousHost->end_time}",
                "status" => Notification::IN_READ
            ]);

        }
        $data = [];

        $notifications = Notification::where('status', Notification::IN_READ)->orderByDesc('id')->get();
        $data["count"] = $notifications->count();
        $data['data'] = $notifications->toArray();
        event(new MyEvent($data));
        return 1;
    }
}
