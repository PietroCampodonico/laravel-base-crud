<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsList = config("comics");

        //Comic::truncate();
        
        foreach ($comicsList as $comic) {
            $newEntry = new Comic();

           $newEntry->title = $comic['title'];
            $newEntry->description = $comic['description'];
            $newEntry->thumb = $comic['thumb'];
            $newEntry->price = $comic['price'];
            $newEntry->series = $comic['series'];
            $newEntry->sale_date = $comic['sale_date'];
            $newEntry->type = $comic['type'];
            
            //$newEntry->fill($comic);

            $newEntry->save();
        }
    }
}
