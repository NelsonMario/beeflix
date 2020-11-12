<?php

use App\Genre;
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
        $data = [
            [
                'name' => 'Kids'
            ],
            [
                'name' => 'Drama'
            ],
            [
                'name' => 'TV Show'
            ],
        ];

        foreach ($data as $d) {
            $model = new Genre();
            $model->name = $d['name'];
            $model->save();
        }
    }
}
