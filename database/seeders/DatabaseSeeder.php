<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // Generate some sample users
       $users = [
        [
            'name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'Operator',
            'username' => 'operator',
            'password' => Hash::make('operator'),
            'role' => 'operator',
            'created_at' => now(),
            'updated_at' => now()
        ]
    ];

    // Insert users into the database
    DB::table('users')->insert($users);
    }
}
