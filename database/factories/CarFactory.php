<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class CarFactory extends Factory
{
    public function definition()
    {
        $brands = ['opel', 'bmw', 'toyota', 'mercedes', 'fiat', 'hyundai'];
        $models = ['corsa', 'corolla', 'civic', 'grand cherokee', 'pathfinder', 'pajero'];
        $car_body = ['SUV', 'convirtable', 'coupe', 'hatchback', 'sedan', 'pickup'];
        $colors = ['red', 'white', 'blue', 'yellow', 'green', 'violet'];

        return [
            'brand' => $brands[rand(0,5)],
            'model' => $models[rand(0,5)],
            'car_body' => $car_body[rand(0,5)],
            'color' => $colors[rand(0,5)],
        ];
    }
}
