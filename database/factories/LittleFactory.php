<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Little>
 */
class LittleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $bg = 
        [
            '5tC0C1oAk2U8IoBPkxq6nUeOAxjtlt6OD52hG2rK.jpg',
            'C7KrXPluTSvSl6Qxc7Qt2W8kUGZu4SVXzoV0mgDN.jpg',
            'GAaw51yqZyNCfGZoCELAiVxSQD3CnKD2iqeY4oIv.jpg',
            'Nez7AyoS4bd1quXMxrpXlmKYtbLusRaKINazCAlV.png',
            'public\storage\img\X3AHBsM9detskNpdgl5ZNg01q6pFY72vvFRGLmom.jpg'
        ];
        return [
            "title"=> $this->faker->title(),
            "text"=> $this->faker->text(),
            "auteur_id"=> $this->faker->numberBetween(1,4),
            "image"=>$bg[rand(1, count($bg)-1)],
        ];
    }
}
