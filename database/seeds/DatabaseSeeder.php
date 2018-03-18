<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EmployeesTableSeeder::class); //pagseed kang seeder
        $this->call(AdminsTableSeeder::class); //pagseed kang seeder
    }
}