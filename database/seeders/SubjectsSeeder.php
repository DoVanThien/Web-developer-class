<?php

namespace Database\Seeders;

use App\Models\Subjects;
use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
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
                'name' => 'Back End 1',
                'description' => 'ngon',
                'userId' => 1
            ],
            [
                'id' => 2,
                'name' => 'Back End 2',
                'description' => 'ngon',
                'userId' => 1
            ],
            [
                'id' => 3,
                'name' => 'Front End 1',
                'description' => 'ngon',
                'userId' => 2
            ],
            [
                'id' => 4,
                'name' => 'Front End 2',
                'description' => 'ngon',
                'userId' => 2
            ],
            [
                'id' => 5,
                'name' => 'Fullstack',
                'description' => 'ngon',
                'userId' => 1
            ]
        ];
        Subjects::insert($data);
    }
}

