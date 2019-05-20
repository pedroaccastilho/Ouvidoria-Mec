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
          'type' => 'Proprietario',
          'cpf' => '123123123',
          'rg' => '123123123',
          'genre' => 'Masculino',
          'birthday' => date('Y-m-d H:i:s'),
          'phone' => '199123123',
          'apartmentNumber' => '123',
          'condominium' => bcrypt('1'),
          'block' => '123',
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
            'type' => 'Proprietario',
            'cpf' => '123123124',
            'rg' => '123123124',
            'genre' => 'Masculino',
            'birthday' => date('Y-m-d H:i:s'),
            'phone' => '199123124',
            'apartmentNumber' => '123',
            'condominium' => bcrypt('1'),
            'block' => '123',
            'password' => bcrypt('123'),
            'adminId' => null,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'email_verified_at' => date('Y-m-d H:i:s'),
            'adminId' => 1

        ]);
    }
}
