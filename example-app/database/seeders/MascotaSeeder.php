<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Mascota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creamos por defecto 10 Mascotas
        Mascota::factory()->count(10)->create() -> each (function ($mascota){
            //Obtenemos un cliente aleatorio en orden
            $cliente = Cliente::inRandomOrder()->first();
            //Asignamos el cliente a la mascota
            $mascota->cliente_id = $cliente->id;
            //Otra forma de hacerlo y actualizar el campo cliente_id
            //Mascota->update(['cliente_id' => $cliente->id]);
            //Guardamos la mascota
            $mascota->save();
        });
    }
}
