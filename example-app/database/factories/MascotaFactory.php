<?php

namespace Database\Factories;

use App\Models\Mascota;
use App\Models\Cliente;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mascota>
 */
class MascotaFactory extends Factory
{

    //Creamos una var miembro de model para accceder a BD
    protected $model = Mascota::class;

    protected $cliente = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->name(),
            'especie'=>$this->faker->randomElement(['Perro','Gato','Caballo','Pescao']),
            'edad'=>$this->faker->numberBetween(1,20),
            'precio'=>$this->faker->randomFloat(2,0.5,300.0),
            'cliente_id'=>null,
        ];
    }
}
