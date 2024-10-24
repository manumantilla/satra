<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Console\Commands\SimularUbicacion;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());

})->purpose('Display an inspiring quote')->hourly();

Artisan::command('simular-ubicacion', function(){
    $this->call(SimularUbicacion::class);
})->describe('Simula la actualizacion de la ubicacicion');