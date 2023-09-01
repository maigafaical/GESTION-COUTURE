<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'MAIGA FAICAL',
            'email' => 'faicalmaiga78@gmail.com',
            'password' => Hash::make('Faical54@'),
        ]);

        DB::table('users')->insert([
            'name' => 'DAOUDA ULRICH',
            'email' => 'ulrichdaouda@gmail.com',
            'password' => Hash::make('ulrich1236'),
        ]);

        DB::table('users')->insert([
            'name' => 'BEMSSE FLORA',
            'email' => 'fsislinebemsse@gmail.com',
            'password' => Hash::make('00000000'),
        ]);
   }
}