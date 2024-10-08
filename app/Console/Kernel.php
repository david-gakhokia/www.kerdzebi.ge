<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('backup:clean')->daily()->at('07:51');
        // $schedule->command('backup:run')->everySixHours();

        $schedule->command('backup:run')->everyMinute();


        // $schedule->command('backup:run')->daily()->at('23:59');


        // $schedule
        //     ->command('backup:run')->timezone('Asia/Tbilisi')->daily()->at("20:22")
        //     ->onFailure(function () {
        //         'Error';
        //     })
        //     ->onSuccess(function () {
        //         'Success';
        //     });
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
