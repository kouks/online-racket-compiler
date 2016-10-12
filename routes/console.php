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

Artisan::command('racket:compile {file}', function ($file) {
   	exec('./vendor/racket/bin/racket ' . $file, $output);
   	
    $this->comment(
    	implode("\n", $output)
    );
})->describe('Compile a bit of racket code');
