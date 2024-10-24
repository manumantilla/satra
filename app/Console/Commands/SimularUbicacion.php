<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SimularUbicacion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'simular-ubicacion';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Simular ubicacion desde un arreglo';


    private $coordenadas = [
        ['lat' => 40.730610, 'lng' => -73.935242], // Ubicación 1 (NY)
        ['lat' => 40.731610, 'lng' => -73.935342], // Ubicación 2
        ['lat' => 40.732610, 'lng' => -73.935442], // Ubicación 3
        ['lat' => 40.733610, 'lng' => -73.935542], // Ubicación 4
        ['lat' => 40.734610, 'lng' => -73.935642], // Ubicación 5
    ];
    //Contado
    private static $index = 0;
    public function __construct(){
        parent::__construct();
    }
    /**
     * Execute the console command.
     */
    public function handle()
    {
        //obteenr las coordenadas del arreglo
        $coordenadaActual = $this->coordenadas[self::$index];
        // ID del vehículo que estás simulando
        $vehiculoId = 1; // Cambia este valor según el vehículo que simules
        // * guardar la ubicacion
        Ubicacion::create([
            'vehiculo_id' => $vehiculoId,
            'latitud' =>$coordenadaActual['lat'],
            'longitud' => $coordenadaActual['lng']
        ]);
        //Mostrar en la consola
        $this->info("Ubicacion Simulada: Vehiculo $vehiculoId - Lat: {$coordenadaActual['lat']}, Lng: {$coordenadaActual['lat']}");
        //incrementar el indice para que siga
        self::$index++;
        if(self::$index >= count($this->coordenadas)){
            self::$index = 0;
        }

    }
}
