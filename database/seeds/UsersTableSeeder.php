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
          'name' => 'Bruno da Silva',
          'email' => 'brunosilva@gmail.com',
          'isAdm' => true,
          'type' => 'Proprietario',
          'cpf' => '69970049038',
          'rg' => '137396958',
          'genre' => 'Masculino',
          'birthday' => date('Y-m-d H:i:s'),
          'phone' => '199999999',
          'apartmentNumber' => '1',
          'condominium' => '1',
          'block' => '1',
          'password' => bcrypt('bruninho'),
          'adminId' => null,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
          'email_verified_at' => date('Y-m-d H:i:s')
      ]);

      DB::table('users')->insert([
          'name' => 'Mario Rodrigues',
          'email' => 'mario157@gmail.com',
          'isAdm' => true,
          'type' => 'Locatario',
          'cpf' => '06607523013',
          'rg' => '155647313',
          'genre' => 'Masculino',
          'birthday' => date('Y-m-d H:i:s'),
          'phone' => '19988888888',
          'apartmentNumber' => '2',
          'condominium' => '1',
          'block' => '1',
          'password' => bcrypt('marioladrao'),
          'adminId' => null,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
          'email_verified_at' => date('Y-m-d H:i:s')
      ]);

      DB::table('users')->insert([
          'name' => 'Pedro Gonzales',
          'email' => 'pedro@gmail.com',
          'isAdm' => true,
          'type' => 'Proprietario',
          'cpf' => '49822148089',
          'rg' => '136396082',
          'genre' => 'Masculino',
          'birthday' => date('Y-m-d H:i:s'),
          'phone' => '19977777777',
          'apartmentNumber' => '3',
          'condominium' => '1',
          'block' => '1',
          'password' => bcrypt('pedro'),
          'adminId' => null,
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
          'email_verified_at' => date('Y-m-d H:i:s')
      ]);
      DB::table('users')->insert([
            'name' => 'João Vitor',
            'email' => 'joao@gmail.com',
            'isAdm' => false,
            'type' => 'Proprietario',
            'cpf' => '123123124',
            'rg' => '123123124',
            'genre' => 'Masculino',
            'birthday' => date('Y-m-d H:i:s'),
            'phone' => '199123124',
            'apartmentNumber' => '123',
            'condominium' => '1',
            'block' => '123',
            'password' => bcrypt('123'),
            'adminId' => null,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'email_verified_at' => null

        ]);
    }
}
