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
          'name' => 'admin',
          'email' => 'admin@gmail.com',
          'isAdm' => true,
          'password' => bcrypt('123'),
          'adminId' => null
      ]);
      DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'isAdm' => false,
            'password' => bcrypt('123'),
            'adminId' => null
        ]);
    }
}
