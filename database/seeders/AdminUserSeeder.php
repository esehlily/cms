<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Lily',
            'matric_number' => 'BU21SEN1060',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'type' => '1'
        ]);
    }
}
