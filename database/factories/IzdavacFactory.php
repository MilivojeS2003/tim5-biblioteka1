<?php

namespace Database\Factories;

use App\Models\Izdavac;
use Illuminate\Database\Eloquent\Factories\Factory;

class IzdavacFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Izdavac::class;

    /**
     * Define the model's default state.
     *
     * @return void
     */
    public function definition()
    {
        return [
          'Naziv'=>$this->faker->name 
        ];
    }
}
