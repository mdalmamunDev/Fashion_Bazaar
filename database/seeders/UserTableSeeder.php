<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrUser = [
            [
                'name' => 'SuperAdmin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('123456'),
                'img' => 'u1.jpg',
                'bio' => 'Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).',
                'mobile' => '+1 123-1234-5123',
                'location' => 'New Work, USA',
                'function' => 'CEO / Co-Founder',
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'img' => 'u2.jpg',
                'bio' => 'Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).',
                'mobile' => '+44 123-123-4123',
                'location' => 'London, UK',
                'function' => 'Developer',
            ]
        ];

        foreach ($arrUser as $eachUser) {
            $use = new User();
            $use->fill($eachUser);
            $use->save();
        }
    }
}
