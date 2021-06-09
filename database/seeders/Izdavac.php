<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Izdavac;
class Izdavac extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Izdavac::factory()->count(10)->create();
    }
}
