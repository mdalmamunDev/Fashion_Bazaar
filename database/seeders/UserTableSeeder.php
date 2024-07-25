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
                'name' => 'Alec Thompson',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('123456'),
                'type' => 1,
                'img' => 'u1.jpg',
                'bio' => 'Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).',
                'mobile' => '+1 123-1234-5123',
                'location' => 'New Work, USA',
                'function' => 'CEO / Co-Founder',
            ],
            [
                'name' => 'Jessica Lee',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'type' => 2,
                'img' => 'u2.jpg',
                'bio' => 'Hi, I’m Jessica Lee, Gratitude: The secret to having it all is knowing you already do. Embrace the challenges as much as the victories, for they shape who you are and define your journey.',
                'mobile' => '+44 123-123-4123',
                'location' => 'London, UK',
                'function' => 'Developer',
            ],
            [
                'name' => 'Natasha Romanoff',
                'email' => 'user@gmail.com',
                'password' => Hash::make('123456'),
                'type' => 3,
                'img' => 'u3.jpg',
                'bio' => 'Hi, I’m Natasha Romanoff, Persistence: The road to success is paved with perseverance. When faced with adversity, remember that every setback is a setup for a comeback. Keep pushing forward, no matter the odds.',
                'mobile' => '+44 652-352-2589',
                'location' => 'London, UK',
                'function' => 'Customer',
            ]
        ];

        foreach ($arrUser as $eachUser) {
            $use = new User();
            $use->fill($eachUser);
            $use->save();
        }
    }
}
