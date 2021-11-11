<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
            [
                'id' => 1
            ], [
                'company_id'        => 1,
                'name'              => 'Mr. Admin',
                'email'             => 'admin@gmail.com',
                'email_verified_at' => today(),
                'password'          => bcrypt('12345678'),
            ]
        );
    }
}
