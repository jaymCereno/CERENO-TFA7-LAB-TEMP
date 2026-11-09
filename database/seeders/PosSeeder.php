<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        Customer::insert([
            [
                'full_name' => 'John Smith',
                'email' => 'john@gmail.com',
                'phone' => '09171234567'
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@gmail.com',
                'phone' => '09181234567'
            ],
            [
                'full_name' => 'Robert Cruz',
                'email' => 'robert@gmail.com',
                'phone' => '09191234567'
            ],
            [
                'full_name' => 'Anna Reyes',
                'email' => 'anna@gmail.com',
                'phone' => '09201234567'
            ],
            [
                'full_name' => 'David Garcia',
                'email' => 'david@gmail.com',
                'phone' => '09211234567'
            ]
        ]);

        User::insert([
            [
                'username' => 'admin',
                'full_name' => 'James Matthew Cereno'
            ],
            [
                'username' => 'cashier1',
                'full_name' => 'Maria Santos'
            ],
            [
                'username' => 'cashier2',
                'full_name' => 'John Cruz'
            ],
            [
                'username' => 'manager1',
                'full_name' => 'Mark Reyes'
            ],
            [
                'username' => 'staff1',
                'full_name' => 'Ana Garcia'
            ]
        ]);
    }
}