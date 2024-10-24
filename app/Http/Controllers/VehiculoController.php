<?php

namespace App\Http\Controllers;

use App\Models\Ubicacion;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    //
    public function actualizar(Request $request){
        $ubicacion = Ubicacion::create([
            'vehiculo_id' => $request->vehiculo_id,
            'latitud' => $request->latitud,
            'longitud' => $request->longitud,
        ]);
        return response()->json(['message' => 'Ubicación Actualizada']);
        
    }
    //obtener ult ubicacion
    public function obtenerUltimaUbicacion()
    {
        $ubicacion = Ubicacion::latest()->first();
        return response()->json([
            'latitud' => $ubicacion->latitud,
            'longitud' =>$ubicacion->longitud,
        ]);
    }
}
