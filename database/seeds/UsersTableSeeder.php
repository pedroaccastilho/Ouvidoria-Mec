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
          'adminId' => null,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
          'email_verified_at' => date('Y-m-d H:i:s'),
          'adminId' => 1
      ]);
      DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'isAdm' => false,
            'password' => bcrypt('123'),
            'adminId' => null,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'email_verified_at' => date('Y-m-d H:i:s'),
            'adminId' => 1

        ]);
    }
}
