<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Joke;

class JokesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jokes = config('jokes_data');

        foreach ($jokes as $joke) {
            $new_joke = new Joke();

            $new_joke->title= $joke['title'];
            $new_joke->slug= Str::slug($new_joke->title, '-');
            $new_joke->description= $joke['description'];
            $new_joke->ratings= $joke['ratings'];
            $new_joke->image= $joke['image'];

            $new_joke->save();
        }
    }
}
