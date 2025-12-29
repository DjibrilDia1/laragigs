<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create();
        Listing::factory(6)->create();
        
        // Listing::create(
        //     [
        //         'title' => 'Laravel Senior Developper',
        //         'tags' => ['php', 'laravel', 'react'],
        //         'company' => 'TechCorp',
        //         'location' => 'Paris, France',
        //         'email' => 'contact@techcorp.fr',
        //         'website' => 'https://techcorp.fr',
        //         'description' => 'Nous cherchons un développeur polyvalent...',
        //     ]
        // );

        // Listing::create(
        //     [
        //         'title' => 'Full-Stack engineer',
        //         'tags' => ['php', 'laravel', 'backend'],
        //         'company' => 'TechCorp',
        //         'location' => 'Paris, France',
        //         'email' => 'contact@techcorp.fr',
        //         'website' => 'https://techcorp.fr',
        //         'description' => 'Nous cherchons un développeur polyvalent...',
        //     ]
        // );
    }
}
