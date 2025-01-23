<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            "name"=> "J Alexis",
            "email"=> "jtenorio@taurus.com.mx",
            "password"=> Hash::make("Taurus25"),
            "rol"=>1,
            "created_at"=>\Carbon\Carbon::now(),
            "updated_at"=>\Carbon\Carbon::now(),
        ]);
    }
}
