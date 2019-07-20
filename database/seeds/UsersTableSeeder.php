<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Lourdes",
            'email' => 'lourdes@mdr.com',
            'password' => bcrypt('Ilovedogs')
        ]);
    }
}
