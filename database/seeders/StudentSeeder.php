<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("students")->insert([
            [
                'name' => 'Syahril Fitrawan Abadi',
                'student_id_number' => 'F55123054',
                'email' => 'syahril004@gmail.com',
                'phone_number' => '085219094122',
                'birth_date' => '2004-11-15',
                'gender' => 'Male',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [
                'name' => 'Anggita',
                'student_id_number' => 'F55123092',
                'email' => 'anggi@gmail.com',
                'phone_number' => '085280284236',
                'birth_date' => '2005-04-21',
                'gender' => 'Female',
                'status' => 'Active',
                'major_id' => 2,
            ]
        ]);
    }
}