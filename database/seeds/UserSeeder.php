<?php

use Illuminate\Database\Seeder;

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
            'first_name' => 'admin',
            'last_name' => 'admin',
            'fullname' => 'MuhammadIrfan',
            'role_id' => '11',
            'status' => 'Active',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'string_password' => 'admin123', // password
            'remember_token' => Str::random(10),
            'password' => Hash::make('admin123'),
        ]);
    }
}
