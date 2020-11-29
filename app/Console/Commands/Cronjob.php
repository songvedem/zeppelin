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
        //  BandwidthHost::create([
        //      "host" => 1
        //  ]);
        // BandwidthHost::create([
        //     "host" => 1
        // ]);

         $bandwidthHosts = BandwidthHost::whereBetween('created_at', [now()->subMinutes(1.5), now()])->get()->unique("created_at");

        $suspiciousHosts = SuspiciousHost::whereBetween('created_at', [now()->subMinutes(1.5), now()])->get()->unique("created_at");

        $detectionThreshold = DetectionThreshold::first();
        $timeInterval = $detectionThreshold->time_interval;

        // $numberBandwidthHosts = count($bandwidthHosts);
        // dd(count($bandwidthHosts));
        // $numberSuspiciousHosts = count($suspiciousHosts);


        foreach ($bandwidthHosts as &$bandwidthHost) {
            $notify = Notification::create([
                "content" => "Bandwidth alert",
                "status" => Notification::IN_READ
            ]);
        }

        foreach ($suspiciousHosts as &$suspiciousHost) {
            $notify = Notification::create([
                "content" => "Status alert",
                "status" => Notification::IN_READ
            ]);
        }
        

        // $notifications = Notification::orderByDesc('id')->get();
        // $data["count"] = $notifications->count();
        // $data['data'] = $notifications->toArray();

//        if (count( $notifications->toArray())) {
//             event(new MyEvent($data));
//        }
    }
}
