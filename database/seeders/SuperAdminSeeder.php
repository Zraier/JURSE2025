<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('super_admin')->insert([
            'name'=> 'maryem abid',
            'username'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password'=>Hash::make('123')
        ]);
    }
}
