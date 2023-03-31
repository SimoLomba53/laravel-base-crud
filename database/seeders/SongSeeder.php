<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Song;

use Faker\Generator as Faker;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<50;$i++){
        $song=new Song;

        $song->title=$faker->word();
        $song->album=$faker->word();
        $song->author=$faker->word();
        $song->editor=$faker->word();
        $song->length=$faker->randomFloat(2, 20, 30);
        $song->poster=$faker->word();
        
        $song->save();
        }
    }
}
