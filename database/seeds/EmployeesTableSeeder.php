<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('employees')->insert([ //for default admin
           
            'EmpId' => 1,
            'LastName' => 'Admin',
            'FirstName' => 'Admin',
            'MiddleName' => 'Admin',
           	'Address' => 'Naga City',
            'Birthdate' => '1988-06-08',
            'ContactNum' => '09123245321',
            'MothersName' => 'S',
            'FathersName' => 'T',
            'DateHired' => '2016-02-10',
           	'EmpPos' => 'staff',
           	'EmpStatus' => 'Regular',
            'EmpPass' => bcrypt('0987654321'),
        ]);


    }
    
}
