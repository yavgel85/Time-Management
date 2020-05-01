<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$T02s3FrJ1BS8lCvu31iWDuqyZS3OI9sBsRlk4jpo1MYmTjMhhKGb.',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
