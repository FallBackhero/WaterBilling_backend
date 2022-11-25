<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BarangayPurok>
 */
class BarangayPurokFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'barangay'=>$this->faker->randomElement(["Baucan Norte",
            "Baucan Sur",
            "Boctol",
            "Boyog Norte",
            "Boyog Proper",
            "Boyog Sur",
            "Cabad",
            "Candasig",
            "Cantalid",
            "Cantomimbo",
            "Cogon",
            "Datag Norte",
            "Datag Sur",
            "Del Carmen Este (Poblacion)",
            "Del Carmen Norte (Poblacion)",
            "Del Carmen Sur (Poblacion)",
            "Del Carmen Weste (Poblacion)",
            "Del Rosario",
            "Dorol",
            "Haguilanan Grande",
            "Hanopol Este",
            "Hanopol Norte",
            "Hanopol Weste",
            "Magsija",
            "Maslog",
            "Sagasa",
            "Sal-ing",
            "San Isidro",
            "San Roque",
            "Santo Niño",
            "Tagustusan"]),
            'purok'=>$this->faker->randomElement(['1','2','3','4','5','6'])
        ];
    }
}
