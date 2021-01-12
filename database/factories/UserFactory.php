<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullName' => $this->faker->name($this->faker->randomElement(GENDER)),
            'birthday' => $this->faker->unixTime,
            'email' => $this->faker->unique()->safeEmail,
            'phoneNumber' => $this->faker->unique()->phoneNumber,
            'job' => $this->faker->jobTitle,
            'avatar' => $this->faker->randomElement(AVATAR),
            'facebook' => $this->faker->url,
            'gender' => $this->faker->randomElement(GENDER),
            'address' => $this->faker->address,
            'role' => 'user_course',
        ];
    }
}

