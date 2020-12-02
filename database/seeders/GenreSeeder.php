<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = collect([
            '2D',
            '3D',
            '4X',
            'Action',
            'Adventure',
            'Advergames',
            'Arcade',
            'Artillery',
            'Beat ‘em up',
            'Brain Training ',
            'Casual',
            'Construction and Management Simulation',
            'Dungeon',
            'Educational',
            'Empire-building',
            'Erotic',
            'Fantasy',
            'Fashion and Beauty',
            'Fighting',
            'First Person Shooter',
            'First Person',
            'Flight Simulation',
            'Gambling',
            'Game Show',
            'Health',
            'Horror',
            'Interactive Book',
            'Language Learning ',
            'Life Simulation ',
            'Logic',
            'Management',
            'Maze',
            'MMORPG',
            'Music',
            'Mystery',
            'Party',
            'Platform',
            'Political',
            'Puzzle',
            'Quiz',
            'Racing',
            'Roguelike',
            'Role Playing Game',
            'Science Fiction ',
            'Shoot ‘em up',
            'Shooter',
            'Simulation',
            'Sports',
            'Strategy',
            'Survival',
            'Tactical Role-Playing ',
            'Third Person',
            'Tile-matching ',
            'Trivia',
            'Vehicular Combat',
            'Visual Novel',
            'War',
        ]);

        $genres->each(function ($genre) {
            Genre::create([
                'name' => $genre,
                'slug' => Str::slug($genre),
            ]);
        });
    }
}
