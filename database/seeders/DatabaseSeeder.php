<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Photo::factory(15)->create();
    }
}
