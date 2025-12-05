<?php

use App\Jobs\RefreshActiveBots;
use App\Jobs\RemoveTradeLockout;
use Illuminate\Support\Facades\Schedule;

Schedule::job(new RefreshActiveBots)->everyFiveSeconds()->withoutOverlapping();
Schedule::job(new RemoveTradeLockout)->everyMinute()->withoutOverlapping();
