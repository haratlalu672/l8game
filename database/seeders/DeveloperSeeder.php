<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $studios = collect([
            'Divine Kids',
            'Konami',
            'Marvelous',
            'Natsume',
            'NLT'
        ]);

        $studios->each(function($studio){
            Developer::create([
                'name' => $studio,
                'slug' => Str::slug($studio)
            ]);
        });
    }
}
