<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class YtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ytvideos')->insert([
            'link' => "https://www.youtube.com/watch?v=wpGYbt9iqMA",
            'title' => "Jonathan Kuminga threw down MONSTER slam in G League",
            'desc' => " ",
            'name' => "NBA Highlights"
        ]);

        DB::table('ytvideos')->insert([
            'link' => "https://www.youtube.com/watch?v=NQLS60oVKCw",
            'title' => "კაცები #176 [სრული ვერსია]",
            'desc' => "Facebook: https://www.facebook.com/katsebi/ Instagram: https://www.instagram.com/katsebi/",
            'name' => "კაცები"
        ]);

        DB::table('ytvideos')->insert([
            'link' => "https://www.youtube.com/watch?v=nL34zDTPkcs",
            'title' => "You can learn Arduino in 15 minutes.",
            'desc' => "The ultimate Arduino tutorial for beginners. Learn how to choose an Arduino, dim LEDs, build a motor speed controller and more. Sponsored by Audible - Get a free 30 day trial & download one free title: http://www.audible.com/afrotechmods",
            'name' => "Afrotechmods"
        ]);

        DB::table('ytvideos')->insert([
            'link' => "https://www.youtube.com/watch?v=nAULsoAQn2g",
            'title' => "Fluffy Loves India | Gabriel Iglesias",
            'desc' => "Happy throwback Thursday!",
            'name' => "Gabriel Iglesias"
        ]);

        DB::table('ytvideos')->insert([
            'link' => "https://www.youtube.com/watch?v=6WReFkfrUIk",
            'title' => "How to Use a Breadboard",
            'desc' => "This tutorial shows you how to use a solderless breadboard to build an electronic circuit, including the basics of how a breadboard works and some common mistakes that beginners make",
            'name' => "Science Buddies"
        ]);
    }
}
