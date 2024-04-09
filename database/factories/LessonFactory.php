<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'url' => 'https://youtu.be/mQQiZVqgUsE?si=KHTewSu0KzGdswDZ',
            'iframe' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/mQQiZVqgUsE?si=KHTewSu0KzGdswDZ" title="YouTube"></iframe>',
            'platform_id' => 1
        ];
    }
}
