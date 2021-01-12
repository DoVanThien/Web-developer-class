<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'id' => 1,
            'fullName' => 'Do Van Thien',
            'birthday' => 922710915,
            'email' => 'vicetone124@gmail.com',
            'phoneNumber' => '89219942269',
            'job' => 'sinh vien',
            'avatar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyaZD-QvPmVX0qcnrSUOqnV0XITHZMst3Fgw&usqp=CAU',
            'facebook' => 'https://www.facebook.com/profile.php?id=100008286854718',
            'gender'=> 'nam',
            'address' => 'xanh-lien bang nga',
            'role' => 'admin',
            'status' => 1
        ],[
            'id' => 2,
            'fullName' => 'Do Van Thien1',
            'birthday' => 920295315,
            'email' => 'vicetone125@gmail.com',
            'phoneNumber' => '89652435702',
            'job' => 'sinh vien',
            'avatar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyaZD-QvPmVX0qcnrSUOqnV0XITHZMst3Fgw&usqp=CAU',
            'facebook' => 'https://www.facebook.com/groups/sainboltclass112020/?multi_permalinks=688436275183331&notif_id=1609777088332461&notif_t=group_activity&ref=notif',
            'gender'=> 'nam',
            'address' => 'xanh-lien bang nga',
            'role' => 'admin',
            'status' => 1
        ]];
        User::insert($data);
    }
}
