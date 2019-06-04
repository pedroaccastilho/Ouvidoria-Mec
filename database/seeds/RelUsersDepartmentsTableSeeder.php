<?php

use Illuminate\Database\Seeder;

class RelUsersDepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('rel_users_departments')->insert([
          'departmentId' => 1,
          'adminId' => 1
      ]);
    }
}
