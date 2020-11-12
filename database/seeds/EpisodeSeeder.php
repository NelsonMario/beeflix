<?php

use App\Episode;
use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'movie_id' => 1,
                'episode' => 1,
                'title' => 'Prolog',
            ],
            [
                'movie_id' => 1,
                'episode' => 2,
                'title' => 'Content',
            ],
            [
                'movie_id' => 1,
                'episode' => 3,
                'title' => 'Ending',
            ],
            [
                'movie_id' => 2,
                'episode' => 1,
                'title' => 'Prolog',
            ],
            [
                'movie_id' => 2,
                'episode' => 2,
                'title' => 'Content',
            ],
            [
                'movie_id' => 2,
                'episode' => 3,
                'title' => 'Ending',
            ],
            [
                'movie_id' => 3,
                'episode' => 1,
                'title' => 'Prolog',
            ],
            [
                'movie_id' => 3,
                'episode' => 2,
                'title' => 'Content',
            ],
            [
                'movie_id' => 3,
                'episode' => 3,
                'title' => 'Ending',
            ],
            [
                'movie_id' => 4,
                'episode' => 1,
                'title' => 'Prolog',
            ],
            [
                'movie_id' => 4,
                'episode' => 2,
                'title' => 'Content',
            ],
            [
                'movie_id' => 4,
                'episode' => 3,
                'title' => 'Ending',
            ],
            [
                'movie_id' => 5,
                'episode' => 1,
                'title' => 'Prolog',
            ],
            [
                'movie_id' => 5,
                'episode' => 2,
                'title' => 'Content',
            ],
            [
                'movie_id' => 5,
                'episode' => 3,
                'title' => 'Ending',
            ],
            [
                'movie_id' => 6,
                'episode' => 1,
                'title' => 'Prolog',
            ],
            [
                'movie_id' => 6,
                'episode' => 2,
                'title' => 'Content',
            ],
            [
                'movie_id' => 6,
                'episode' => 3,
                'title' => 'Ending',
            ],
            [
                'movie_id' => 7,
                'episode' => 1,
                'title' => 'Prolog',
            ],
            [
                'movie_id' => 7,
                'episode' => 2,
                'title' => 'Content',
            ],
            [
                'movie_id' => 7,
                'episode' => 3,
                'title' => 'Ending',
            ],
            [
                'movie_id' => 8,
                'episode' => 1,
                'title' => 'Prolog',
            ],
            [
                'movie_id' => 8,
                'episode' => 2,
                'title' => 'Content',
            ],
            [
                'movie_id' => 8,
                'episode' => 3,
                'title' => 'Ending',
            ],
            [
                'movie_id' => 9,
                'episode' => 1,
                'title' => 'Prolog',
            ],
            [
                'movie_id' => 9,
                'episode' => 2,
                'title' => 'Content',
            ],
            [
                'movie_id' => 9,
                'episode' => 3,
                'title' => 'Ending',
            ],
        ];

        foreach ($data as $d) {
            $model = new Episode();
            $model->movie_id = $d['movie_id'];
            $model->episode = $d['episode'];
            $model->title = $d['title'];
            $model->save();
        }
    }
}
