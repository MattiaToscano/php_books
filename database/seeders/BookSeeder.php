<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('it_IT');
        for ($i = 0; $i < 20; $i++) {
            $disponibile = $faker->boolean();
            Book::create([
                'titolo' => $faker->firstName(),
                'autore' => $faker->firstName() . ' ' . $faker->lastName(),
                'casa_editrice' => $faker->lastName(),
                'anno_pubblicazione' => $faker->year(),
                'genere' => $faker->word(),
                'isbn' => $faker->isbn13(),
                'numero_pagine' => $faker->numberBetween(100, 800),
                'disponibile' => $disponibile,
                'stato' => $disponibile ? 'nuovo' : 'usato',
                'prestato_a' => $disponibile ? null : $faker->firstName() . ' ' . $faker->lastName(),
                'note' => null,
            ]);
        }
    }
}
