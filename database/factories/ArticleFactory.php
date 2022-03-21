<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
           // $table->foreignId('category_id');
            'category_id'=> mt_rand(1,3),
            'title'=> $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'user_id' => mt_rand(1,10),
            'body' => $this->faker->paragraph(mt_rand(5,10)),
            'excerpt' => $this->faker->paragraph(),
            'published_at' => $this->faker->dateTime()
            //$table->string('slug')->unique();
            //$table->string('author');
            //$table->text('body');
            //$table->string('excerpt');
            //$table->timestamp('published_at')->nullable();
            //$table->timestamps();
        ];
    }
}
