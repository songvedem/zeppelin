<?php

namespace App\Console\Commands;

use App\Events\MyEvent;
use App\Events\Noti;
use App\Models\BandwidthHost;
use App\Models\DetectionThreshold;
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
         $bandwidthHosts = BandwidthHost::whereBetween('created_at', [now()->subMinutes(2), now()])->get();

        $suspiciousHosts = SuspiciousHost::whereBetween('created_at', [now()->subMinutes(2), now()])->get();

        $data = [];

        $data["count"] = $bandwidthHosts->count() + $suspiciousHosts->count();

        $data['data'] = [];
        foreach ($bandwidthHosts as $bandwidthHost) {
            array_push($data['data'], "Bandwidth Host changed");
        }

        foreach ($suspiciousHosts as $suspiciousHost) {
            array_push($data['data'], "Suspicious Host changed");
        }
        event(new MyEvent($data));
        return 1;
    }
}
