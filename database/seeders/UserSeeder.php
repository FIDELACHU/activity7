<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB; //import importante
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=>'Admon',
                'email'=>'admon@robotics.com',
                'password'=>bcrypt('Adm@2022'),
                'role'=>'Administrator'
            ],

            [
                'name'=>'Tecmilenio',
                'email'=>'tecmilenio@robotics.com',
                'password'=>bcrypt('Adm@2022'),
                'role'=>'Teacher'
            ],

            [
                'name'=>'Student',
                'email'=>'student@robotics.com',
                'password'=>bcrypt('Adm@2022'),
                'role'=>'Student'
            ],
        ]);

    }
}
