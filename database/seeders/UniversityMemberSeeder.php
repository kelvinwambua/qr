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
                'id' => 183523,
                'name' => 'Karanei Kimutai',
                'email' => 'kimutai.karanei@strathmore.edu',
                'password' => Hash::make('password'),
                'role' => 'student',
                'photo_url' => 'https://randomuser.me/api/portraits/women/1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 190004,
                'name' => 'Witness Mukundi',
                'email' => 'mukundi.chingwena@strathmore.edu',
                'password' => Hash::make('password'),
                'role' => 'student',
                'photo_url' => 'https://randomuser.me/api/portraits/men/2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 130103,
                'name' => 'Fatima Yusuf',
                'email' => 'fatima.yusuf@university.ac.ke',
                'password' => Hash::make('password'),
                'role' => 'student',
                'photo_url' => 'https://randomuser.me/api/portraits/women/3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 130104,
                'name' => 'David Kariuki',
                'email' => 'david.kariuki@university.ac.ke',
                'password' => Hash::make('password'),
                'role' => 'student',
                'photo_url' => 'https://randomuser.me/api/portraits/men/4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 130105,
                'name' => 'Chloe Wangari',
                'email' => 'chloe.wangari@university.ac.ke',
                'password' => Hash::make('password'),
                'role' => 'student',
                'photo_url' => 'https://randomuser.me/api/portraits/women/5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 130106,
                'name' => 'Samuel Mwangi',
                'email' => 'samuel.mwangi@university.ac.ke',
                'password' => Hash::make('password'),
                'role' => 'student',
                'photo_url' => 'https://randomuser.me/api/portraits/men/6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 189984,
                'name' => 'Alvin Murithi',
                'email' => 'alvin.muriuki@strathmore.edu',
                'password' => Hash::make('password'),
                'role' => 'student',
                'photo_url' => 'https://randomuser.me/api/portraits/men/18.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2101,
                'name' => 'Dr. Eleanor Wanjiku',
                'email' => 'eleanor.wanjiku@university.ac.ke',
                'password' => Hash::make('password'),
                'role' => 'staff',
                'photo_url' => 'https://randomuser.me/api/portraits/women/10.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2102,
                'name' => 'Prof. Ken Ochieng',
                'email' => 'ken.ochieng@university.ac.ke',
                'password' => Hash::make('password'),
                'role' => 'staff',
                'photo_url' => 'https://randomuser.me/api/portraits/men/11.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2103,
                'name' => 'Dr. Imani Nassir',
                'email' => 'imani.nassir@university.ac.ke',
                'password' => Hash::make('password'),
                'role' => 'staff',
                'photo_url' => 'https://randomuser.me/api/portraits/women/12.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2104,
                'name' => 'Prof. Mark Chepkwony',
                'email' => 'mark.chepkwony@university.ac.ke',
                'password' => Hash::make('password'),
                'role' => 'staff',
                'photo_url' => 'https://randomuser.me/api/portraits/men/14.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2105,
                'name' => 'Dr. Amina Hussein',
                'email' => 'amina.hussein@university.ac.ke',
                'password' => Hash::make('password'),
                'role' => 'staff',
                'photo_url' => 'https://randomuser.me/api/portraits/women/15.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2106,
                'name' => 'Prof. Victor Mutai',
                'email' => 'victor.mutai@university.ac.ke',
                'password' => Hash::make('password'),
                'role' => 'staff',
                'photo_url' => 'https://randomuser.me/api/portraits/men/16.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
