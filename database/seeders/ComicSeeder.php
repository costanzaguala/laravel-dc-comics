<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comicsData = config('comics');
        foreach ($comicsData as $index => $SingleComicsData) {
            $comic = New Comic();
            $comic->title = $SingleComicsData['title'];
            $comic->description = $SingleComicsData['description'];
            $comic->thumb = $SingleComicsData['thumb'];
            $newPrice = str_replace('$','',$SingleComicsData['price']);
            $comic->price = floatval($newPrice);
            $comic->series = $SingleComicsData['series'];
            $comic->sale_date = $SingleComicsData['sale_date'];
            $comic->type = $SingleComicsData['type'];
            $comic->artists = json_encode($SingleComicsData['artists']);
            $comic->writers = json_encode($SingleComicsData['writers']);
            $comic->save();
        }
    }
}
