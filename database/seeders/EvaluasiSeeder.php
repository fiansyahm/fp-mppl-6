<?php

namespace Database\Seeders;

use App\Models\Evaluasi;
use Illuminate\Database\Seeder;

class EvaluasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evaluasi::factory()->count(20)->create();
    }
}
