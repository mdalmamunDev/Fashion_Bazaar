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
                'name' => 'Tony Stark',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('123456'),
                'type' => 1,
                'img' => 'images/Tony Stark.jpg',
                'bio' => 'Hi, I’m Tony Stark, Sometimes you’ve gotta run before you can walk.',
                'mobile' => '+1 321-654-0987',
                'location' => 'Los Angeles, USA',
                'function' => 'Inventor',
            ],
            [
                'name' => 'Steve Rogers',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'type' => 2,
                'img' => 'images/Steve Rogers.jpg',
                'bio' => 'Hi, I’m Steve Rogers, When you have the power to help people, you should never ignore it.',
                'mobile' => '+1 987-654-3210',
                'location' => 'Brooklyn, USA',
                'function' => 'Soldier',
            ],
            [
                'name' => 'Peter Parker',
                'email' => 'peter.parker@gmail.com',
                'password' => Hash::make('123456'),
                'type' => 3,
                'img' => 'images/Peter Parker.jpg',
                'bio' => 'Hi, I’m Peter Parker, Responsibility: With great power comes great responsibility. Use your talents and skills to make a positive impact in the world.',
                'mobile' => '+1 789-012-3456',
                'location' => 'New York, USA',
                'function' => 'Customer',
            ],
            [
                'name' => 'Bruce Banner',
                'email' => 'holk@gmail.com',
                'password' => Hash::make('123456'),
                'type' => 3,
                'img' => 'images/Bruce Banner.jpg',
                'bio' => 'Hi, I’m Bruce Banner, Science is the key to our future, and if you don’t believe in science, then you’re holding everybody back.',
                'mobile' => '+1 456-789-1011',
                'location' => 'New York, USA',
                'function' => 'Scientist',
            ],
            [
                'name' => 'Natasha Romanoff',
                'email' => 'user@gmail.com',
                'password' => Hash::make('123456'),
                'type' => 3,
                'img' => 'images/Natasha Romanoff.jpg',
                'bio' => 'Hi, I’m Natasha Romanoff, Persistence: The road to success is paved with perseverance. When faced with adversity, remember that every setback is a setup for a comeback. Keep pushing forward, no matter the odds.',
                'mobile' => '+44 652-352-2589',
                'location' => 'London, UK',
                'function' => 'Customer',
            ],
            [
                'name' => 'Bruce Wayne',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('123456'),
                'type' => 3,
                'img' => 'images/Bruce Wayne.jpg',
                'bio' => 'Hi, I’m Bruce Wayne, Determination: When you feel like giving up, remember why you started. Every challenge is an opportunity to grow stronger and wiser.',
                'mobile' => '+1 987-654-3210',
                'location' => 'Gotham City, USA',
                'function' => 'Customer',
            ],
            [
                'name' => 'Diana Prince',
                'email' => 'user3@gmail.com',
                'password' => Hash::make('123456'),
                'type' => 3,
                'img' => 'images/Diana Prince.jpg',
                'bio' => 'Hi, I’m Diana Prince, Courage: The strength to overcome adversity lies within you. Believe in yourself and your ability to achieve greatness.',
                'mobile' => '+1 654-321-9876',
                'location' => 'Themyscira',
                'function' => 'Customer',
            ],
            [
                'name' => 'Clark Kent',
                'email' => 'clark.kent@gmail.com',
                'password' => Hash::make('123456'),
                'type' => 3,
                'img' => 'images/Clark Kent.jpg',
                'bio' => 'Hi, I’m Clark Kent, Hope: In the face of darkness, always look for the light. Hope is the beacon that guides us through the toughest times.',
                'mobile' => '+1 321-654-0987',
                'location' => 'Metropolis, USA',
                'function' => 'Customer',
            ],
            [
                'name' => 'Alec Thompson',
                'email' => 'alec.thompson@gmail.com',
                'password' => Hash::make('123456'),
                'type' => 3,
                'img' => 'images/Alec Thompson.jpg',
                'bio' => 'Hi, I’m Alec Thompson, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).',
                'mobile' => '+1 123-1234-5123',
                'location' => 'New York, USA',
                'function' => 'CEO / Co-Founder',
            ],
            [
                'name' => 'Jessica Lee',
                'email' => 'jessica.lee@gmail.com',
                'password' => Hash::make('123456'),
                'type' => 3,
                'img' => 'images/Jessica Lee.jpg',
                'bio' => 'Hi, I’m Jessica Lee, Gratitude: The secret to having it all is knowing you already do. Embrace the challenges as much as the victories, for they shape who you are and define your journey.',
                'mobile' => '+44 123-123-4123',
                'location' => 'London, UK',
                'function' => 'Developer',
            ],
        ];

        foreach ($arrUser as $eachUser) {
            $use = new User();
            $use->fill($eachUser);
            $use->save();
        }
    }
}
