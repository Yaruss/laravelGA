<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $names = \App\Models\Name::factory(10)->create();
        $names_id = $names->pluck('id');

        $names->each(function ($name) use ($names_id){
            \App\Models\Error::factory(5)->create([
                'names_id' => $name->id
            ]);
        });


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
