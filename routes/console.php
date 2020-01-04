<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;
use App\Models\Message;
/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})
->describe('Display an inspiring quote');

Artisan::command('artisansmap:cleandb', function () {
    $this->info('Cleaning records...');

    Message::today()->delete();

    $this->info('Database cleaned successfully!');
})->describe('Check whether someone is an artisan');