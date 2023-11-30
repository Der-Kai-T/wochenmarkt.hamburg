<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use App\Models\Organizer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        $ba_mitte = Organizer::create([
            "name" => "Bezirksamt Hamburg-Mitte",
                ]
        );

        $hamm = Event::create([
            "organizer" => $ba_mitte->id,
            "name" => "Hamm - Bei der Vogelstange",
            "map_marker" => "53.557193218440595;10.055226087570192"
        ]);

    }
}
