<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Annonce;


class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Annonce::create([
            'titre' => 'Conférence Tech',
            'description' => 'Une conférence sur les nouvelles technologies.',
            'image' => 'conference.jpg',
            'prix' => 100.00,
            'startEventAt' => now(),
            'endEventAt' => now()->addHours(2),
            'location' => 'Paris, France',
            'categorie_id' => 1,
        ]);
        // Annoncement::factory()->count(10)->create();

        
    }
}
