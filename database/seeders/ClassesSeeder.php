<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Back_End_1_sang',
                'userId' => 1,
                'subjectId' => 1,
                'status' => 1,
                'created_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'Back_End_2_toi',
                'userId' => 1,
                'subjectId' => 2,
                'status' => 1,
                'created_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'Front_End_1_sang',
                'userId' => 2,
                'subjectId' => 3,
                'status' => 1,
                'created_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'Front_End_2_toi',
                'userId' => 2,
                'subjectId' => 4,
                'status' => 1,
                'created_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'Fullstack_sang',
                'userId' => 1,
                'subjectId' => 5,
                'status' => 1,
                'created_at' => now()
            ],
            [
                'id' => 6,
                'name' => 'Fullstack_toi',
                'userId' => 1,
                'subjectId' => 5,
                'status' => 2,
                'created_at' => now()
            ]
        ];
        Classes::insert($data);
    }
}

