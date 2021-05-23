<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new  User();
        $user->first_name = 'Lee';
        $user->last_name = 'Vu';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('123123');
        $user->status = 1;

        $user->save();
    }
}
