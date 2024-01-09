<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeesTableSeeder extends Seeder
{
    public function run()
    {
 
        Employee::truncate();

 
        Employee::create([
            'name' => 'Mohammed',
            'email' => 'mohammed@mohammed.com',
            'department' => 'Sales',
        ]);

        Employee::create([
            'name' => 'Talal',
            'email' => 'talal@talal.com',
            'department' => 'Marketing',
        ]);
    }
}
