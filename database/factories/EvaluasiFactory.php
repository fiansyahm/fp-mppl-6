<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'unit_id' => rand(2,5),
            'judul' => $this->faker->text(20),
            'status' => rand(-1,1),
            'dokumen' => NULL,
            'komentar' => NULL,
            'tanggal' => now(),
        ];
    }
}
