<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Group;
use App\Models\RoboticKit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    protected $model = Course::class;
    
    public function definition(): array
    {
        return [
            'course_key' => strtoupper($this->faker->bothify('Rob###')),    //Rob 101 102 103...
            'title' => $this->faker->sentence(3),
            'course_cover' => $this->faker->imageUrl(),
            'content' => $this->faker->paragraph(),
            'didactic_material' => $this->faker->word(),
            'group_id' => Group::factory(),
            'robotic_kit_id' => RoboticKit::factory(),
        ];
    }
}
