<?php

namespace Database\Seeders;

use App\Models\Episodes;
use Illuminate\Database\Seeder;

class EpisodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $episodes = [
            [
                'id' => 1,
                'season' => 6,
                'number' => 18,
                'watched' => false,
                'series_id' => 1
            ],
            [
                'id' => 2,
                'season' => 17,
                'number' => 17,
                'watched' => false,
                'series_id' => 2
            ],
            [
                'id' => 3,
                'season' => 8,
                'number' => 6,
                'watched' => false,
                'series_id' => 3,
            ],
            [
                'id' => 4,
                'season' => 4,
                'number' => 13,
                'watched' => false,
                'series_id' => 4
            ],
            [
                'id' => 5,
                'season' => 6,
                'number' => 15,
                'watched' => false,
                'series_id' => 5
            ],
            [
                'id' => 6,
                'season' => 2,
                'number' => 12,
                'watched' => false,
                'series_id' => 6
            ],
            [
                'id' => 7,
                'season' => 3,
                'number' => 8,
                'watched' => false,
                'series_id' => 7
            ],
            [
                'id' => 8,
                'season' => 3,
                'number' => 8,
                'watched' => false,
                'series_id' => 8
            ],
            [
                'id' => 9,
                'season' => 5,
                'number' => 12,
                'watched' => false,
                'series_id' => 9
            ],
            [
                'id' => 10,
                'season' => 1,
                'number' => 12,
                'watched' => false,
                'series_id' => 10
            ],
        ];

        foreach ($episodes as $episode) {
            # code...
            Episodes::create([
                'id' => $episode['id'],
                'season' => $episode['season'],
                'number' => $episode['number'],
                'watched' => $episode['watched'],
                'series_id' => $episode['series_id']
            ]);
        }
    }
}
