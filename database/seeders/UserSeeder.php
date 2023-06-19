<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'saitama',
            'firstname' => 'Vincensius',
            'lastname' => 'Sebastian',
            'dob' => '2003-01-10',
            'address' => 'Alfa Indah',
            'phone' => '083503818642',
            'email' => 'cyberscout@gmail.com',
            'password' => Hash::make('VincenTest#123'),
            'role' => 'Assistant',
        ]);

        User::create([
            'username' => '96neko',
            'firstname' => 'Gian',
            'lastname' => 'Darren',
            'dob' => '2003-01-12',
            'address' => 'Alfa Biasa aja',
            'phone' => '083503818643',
            'email' => 'cyberscout2@gmail.com',
            'password' => Hash::make('GianTest#123'),
            'role' => 'Assistant',
        ]);

        User::create([
            'username' => 'xovert',
            'firstname' => 'Chance',
            'lastname' => 'Edrea',
            'dob' => '2003-01-13',
            'address' => 'Alfa Tidak Indah',
            'phone' => '083503818645',
            'email' => 'cyberscout3@gmail.com',
            'password' => Hash::make('EdreaTest#123'),
            'role' => 'Assistant',
        ]);

        User::create([
            'username' => 'emiliaDiff',
            'firstname' => 'Andrew',
            'lastname' => 'Andreas',
            'dob' => '2003-04-10',
            'address' => 'Kalideres',
            'phone' => '083503818640',
            'email' => 'cyberscout69@gmail.com',
            'password' => Hash::make('AndrewTest#123'),
            'role' => 'Assistant',
        ]);

        User::create([
            'username' => 'tornado7',
            'firstname' => 'Snoop',
            'lastname' => 'Dog',
            'dob' => '2003-07-07',
            'address' => 'Texas',
            'phone' => '083503818699',
            'email' => 'cyberscout101@gmail.com',
            'password' => Hash::make('SnoopTest#123'),
            'role' => 'Assistant',
        ]);
    }
}
