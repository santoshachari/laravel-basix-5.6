<?php

use Illuminate\Foundation\Inspiring;

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
})->describe('Display an inspiring quote');

Artisan::command('read_json {filename}', function ($filename) {
    $file = storage_path().'/import/'.$filename;
    $json = json_decode(file_get_contents($file),true);
    $metadata = $json['metadata'];
    dd($json['payload']['OLLY'][$metadata]['smsJsonObject']['SmsArray'][0]);
})->describe('Display an inspiring quote');
