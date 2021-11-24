<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Image;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model =Image::class;
     public function definition()
    {
        $number=rand(1,100);
        return [
            'image'=>'https://placeimg.com/640/480/' . $number,
        ];
    }
}
