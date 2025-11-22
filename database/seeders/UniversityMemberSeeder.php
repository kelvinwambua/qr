<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UniversityMemberSeeder extends Seeder
{
    public function run(): void
    {
        // Split data into students and lecturers
        $students = [
            [
                'id' => 183523,
                'name' => 'Karanei Kimutai',
                'email' => 'kimutai.karanei@strathmore.edu',
                'password' => Hash::make('password'),
                'photo_url' => 'https://randomuser.me/api/portraits/women/1.jpg',
            ],
            [
                'id' => 190004,
                'name' => 'Witness Mukundi',
                'email' => 'mukundi.chingwena@strathmore.edu',
                'password' => Hash::make('password'),
                'photo_url' => 'https://randomuser.me/api/portraits/men/2.jpg',
            ],
            [
                'id' => 130103,
                'name' => 'Fatima Yusuf',
                'email' => 'fatima.yusuf@university.ac.ke',
                'password' => Hash::make('password'),
                'photo_url' => 'https://randomuser.me/api/portraits/women/3.jpg',
            ],
            [
                'id' => 130104,
                'name' => 'David Kariuki',
                'email' => 'david.kariuki@university.ac.ke',
                'password' => Hash::make('password'),
                'photo_url' => 'https://randomuser.me/api/portraits/men/4.jpg',
            ],
            [
                'id' => 130105,
                'name' => 'Chloe Wangari',
                'email' => 'chloe.wangari@university.ac.ke',
                'password' => Hash::make('password'),
                'photo_url' => 'https://randomuser.me/api/portraits/women/5.jpg',
            ],
            [
                'id' => 130106,
                'name' => 'Samuel Mwangi',
                'email' => 'samuel.mwangi@university.ac.ke',
                'password' => Hash::make('password'),
                'photo_url' => 'https://randomuser.me/api/portraits/men/6.jpg',
            ],
            [
                'id' => 189984,
                'name' => 'Alvin Murithi',
                'email' => 'alvin.muriuki@strathmore.edu',
                'password' => Hash::make('password'),
                'photo_url' => 'https://randomuser.me/api/portraits/men/18.jpg',
            ],
        ];
        $lecturers = [
            [
                'id' => 2101,
                'name' => 'Dr. Eleanor Wanjiku',
                'email' => 'eleanor.wanjiku@university.ac.ke',
                'password' => Hash::make('password'),
                'photo_url' => 'https://randomuser.me/api/portraits/women/10.jpg',
            ],
            [
                'id' => 2102,
                'name' => 'Prof. Ken Ochieng',
                'email' => 'ken.ochieng@university.ac.ke',
                'password' => Hash::make('password'),
                'photo_url' => 'https://randomuser.me/api/portraits/men/11.jpg',
            ],
            [
                'id' => 2103,
                'name' => 'Dr. Imani Nassir',
                'email' => 'imani.nassir@university.ac.ke',
                'password' => Hash::make('password'),
                'photo_url' => 'https://randomuser.me/api/portraits/women/12.jpg',
            ],
            [
                'id' => 2104,
                'name' => 'Prof. Mark Chepkwony',
                'email' => 'mark.chepkwony@university.ac.ke',
                'password' => Hash::make('password'),
                'photo_url' => 'https://randomuser.me/api/portraits/men/14.jpg',
            ],
            [
                'id' => 2105,
                'name' => 'Dr. Amina Hussein',
                'email' => 'amina.hussein@university.ac.ke',
                'password' => Hash::make('password'),
                'photo_url' => 'https://randomuser.me/api/portraits/women/15.jpg',
            ],
            [
                'id' => 2106,
                'name' => 'Prof. Victor Mutai',
                'email' => 'victor.mutai@university.ac.ke',
                'password' => Hash::make('password'),
                'photo_url' => 'https://randomuser.me/api/portraits/men/16.jpg',
            ],
            [
                'id' => 2107,
                'name' => 'Natalia Mana',
                'email' => 'natalieburgei04@gmail.com',
                'password' => Hash::make('password'),
                'photo_url' => null,
            ],
        ];
        DB::connection('university')->table('students')->upsert($students, ['id']);
        DB::connection('university')->table('lecturers')->upsert($lecturers, ['id']);
    }
}
