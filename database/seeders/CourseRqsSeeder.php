<?php

namespace Database\Seeders;

use App\Models\Course_rqs;
use Illuminate\Database\Seeder;

class CourseRqsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for ($i = 3; $i < 58; $i++) {
            $data[] = [
                'id' => $i,
                'frequency' => rand(1, 3),
                'durationTime' => DATA_TIME_DURATION[rand(0, 2)],
                'wishJob' => rand(1, 3),
                'completeExercise' => rand(1, 3),
                'outCondition' => rand(1, 3),
                'nowSkill' => DATA_SKILL[rand(0, 3)],
                'mission' => "don't know",
                'userId' => $i,
                'classId' => rand(1, 5),
                'status' => 3,
                'created_at'=> now()
            ];
        };

        Course_rqs::insert($data);
    }
}

