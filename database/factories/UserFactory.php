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
        $avatar = ['https://i.pinimg.com/236x/e5/12/eb/e512ebb615a4652c21eadc2f22be5b3e.jpg', 'https://i.pinimg.com/236x/ff/6d/2a/ff6d2a3073d53db2e4c74b8e969afea6.jpg', 'https://i.pinimg.com/236x/47/a8/97/47a8976992bddc4be55dde55604e81dd.jpg', 'https://i.pinimg.com/236x/a3/3b/24/a33b245c4ba4f594451f17fdf1100fed.jpg', 'https://i.pinimg.com/236x/cc/fb/2b/ccfb2b9a9ae43a5c1ee113737babd17e.jpg'];
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'fullName' => $this->faker->name($gender),
            'birthday' => $this->faker->unixTime,
            'email' => $this->faker->unique()->safeEmail,
            'phoneNumber' => $this->faker->unique()->phoneNumber,
            'job' => $this->faker->jobTitle,
            'avatar' => $this->faker->randomElement($avatar),
            'facebook' => $this->faker->url,
            'gender' => $gender,
            'address' => $this->faker->address,
            'role' => 'user_course',
        ];
    }
}

