<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
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
                'genre_id' => 1,
                'title' => "Grand Blue",
                'photo' => 'asset/grandblue.jpg',
                'description' => 'Manga ini menceritakan tentang Iori Kitahara. Sesaat setelah pindah ke kota yang dekat pantai, cowok cute ini berhasil masuk ke Izu University yang nggak pernah teripikirkan sebelumnya. Kehidupan barunya pun dimulai.Ia masuk ke dalam club diving yang dipenuhi para cewek cantik dan senior serta teman tukang usil. ',
                'rating' => 5
            ],
            [
                'genre_id' => 1,
                'title' => "Hataraku Maou Sama",
                'photo' => 'asset/hatarakumaou.jpg',
                'description' => 'Mencekam rasa takut ke dalam hati manusia, Raja Iblis mencoba menaklukan negeri Enter Isla dengan ribuan pasukkannya. Penaklukan negeri Enter Isla digagalkan oleh seorang pahlawan bernama Emilia memaksa Iblis untuk mundur melalui portal dimensi.',
                'rating' => 5
            ],
            [
                'genre_id' => 1,
                'title' => "Hataraku Maou Sama S2",
                'photo' => 'asset/hatarakumaou.jpg',
                'description' => 'Mencekam rasa takut ke dalam hati manusia, Raja Iblis mencoba menaklukan negeri Enter Isla dengan ribuan pasukkannya. Penaklukan negeri Enter Isla digagalkan oleh seorang pahlawan bernama Emilia memaksa Iblis untuk mundur melalui portal dimensi.',
                'rating' => 5
            ],
            [
                'genre_id' => 2,
                'title' => "Jujutsu Kaisen S1",
                'photo' => 'asset/jujutsukaisen.jpg',
                'description' => 'Serpihan iblis Ryoumen Sukuna yang legendaris yang legendaris dan ditakuti, hilang berserakan. Jika ada iblis yang memakan bagian tubuh Sukuna, kekuatan yang mereka peroleh mampu menghancurkan dunia. Untungnya, ada sekolah misterius bernama Jujutsu Sorceres yang mampu melindungi keberadaan makhluk hidup dari hayat hidup.',
                'rating' => 5
            ],
            [
                'genre_id' => 2,
                'title' => "Jujutsu Kaisen S2",
                'photo' => 'asset/jujutsukaisen.jpg',
                'description' => 'Serpihan iblis Ryoumen Sukuna yang legendaris yang legendaris dan ditakuti, hilang berserakan. Jika ada iblis yang memakan bagian tubuh Sukuna, kekuatan yang mereka peroleh mampu menghancurkan dunia. Untungnya, ada sekolah misterius bernama Jujutsu Sorceres yang mampu melindungi keberadaan makhluk hidup dari hayat hidup.',
                'rating' => 5
            ],
            [
                'genre_id' => 2,
                'title' => "Jujutsu Kaisen S3",
                'photo' => 'asset/jujutsukaisen.jpg',
                'description' => 'Serpihan iblis Ryoumen Sukuna yang legendaris yang legendaris dan ditakuti, hilang berserakan. Jika ada iblis yang memakan bagian tubuh Sukuna, kekuatan yang mereka peroleh mampu menghancurkan dunia. Untungnya, ada sekolah misterius bernama Jujutsu Sorceres yang mampu melindungi keberadaan makhluk hidup dari hayat hidup.',
                'rating' => 5
            ],
            [
                'genre_id' => 3,
                'title' => "Made in Abyss S1",
                'photo' => 'asset/madeinabyss.jpg',
                'description' => 'Anime yang menceritakan tentang adanya lubang besar di bumi ini yang didalamnya sangat dalam dan terbentuk hingga 7 lapisan yang berbeda. Masalah dari 7 lapisan ini pun berasal dari para penyelam gua yang sudah pernah menjelajahi lubang ini. ',
                'rating' => 5
            ],
            [
                'genre_id' => 3,
                'title' => "Made in Abyss S1",
                'photo' => 'asset/madeinabyss.jpg',
                'description' => 'Anime yang menceritakan tentang adanya lubang besar di bumi ini yang didalamnya sangat dalam dan terbentuk hingga 7 lapisan yang berbeda. Masalah dari 7 lapisan ini pun berasal dari para penyelam gua yang sudah pernah menjelajahi lubang ini. ',
                'rating' => 5
            ],
            [
                'genre_id' => 3,
                'title' => "Made in Abyss S3",
                'photo' => 'asset/madeinabyss.jpg',
                'description' => 'Anime yang menceritakan tentang adanya lubang besar di bumi ini yang didalamnya sangat dalam dan terbentuk hingga 7 lapisan yang berbeda. Masalah dari 7 lapisan ini pun berasal dari para penyelam gua yang sudah pernah menjelajahi lubang ini.',
                'rating' => 5
            ],
        ];

        foreach ($data as $d) {
            $model = new Movie();
            $model->genre_id = $d['genre_id'];
            $model->title = $d['title'];
            $model->photo = $d['photo'];
            $model->description = $d['description'];
            $model->rating = $d['rating'];
            $model->save();
        }
    }
}
