<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UniversityMemberSeeder extends Seeder
{
    public function run(): void
    {
        DB::connection('university')->table('v_university_members')->insert([
            [
                'id' => 12345,
                'name' => 'John Doe',
                'email' => 'john.doe@strathmore.edu',
                'password' => Hash::make('password123'),
                'role' => 'student',
                'photo_url' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 67890,
                'name' => 'Jane Smith',
                'email' => 'jane.smith@strathmore.edu',
                'password' => Hash::make('password123'),
                'role' => 'staff',
                'photo_url' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
