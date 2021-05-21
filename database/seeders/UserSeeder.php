<?php

namespace Database\Seeders;

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
        DB::table('ql_users')->insert([
            'first_name' => 'Lee',
            'last_name' => 'Vu',
            'email' => 'admin@gmail.com',
            'password' => md5('123123')
        ]);
    }
}
