<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Comment::factory()->count(10)->create();


        // Commentaire::create([
        //     'contenu' => 'Je suis intéressé.',
        //     'user_id' => 2,
        //     'annonce_id' => 1,
        // ]);
    }
}
