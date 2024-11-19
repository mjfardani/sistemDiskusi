<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Symfony\Component\String\ByteString;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('ADMIN'),
            'role' => 'ADMIN',
            'plain_token' => '',
        ]);

        DB::table('users')->insert([
            'name' => 'member1',
            'email' => 'member1@test.com',
            'password' => bcrypt('MEMBER'),
            'role' => 'MEMBER',
            'plain_token' => '',
        ]);
    }
}
