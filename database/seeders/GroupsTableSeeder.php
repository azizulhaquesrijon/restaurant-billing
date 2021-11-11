<?php

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::firstOrCreate(['id' => 1], [
            'name'      => 'Smart Software Ltd Group',
            'email'     => 'pacific_group@gmail.com',
            'phone'     => '01777777777',
            'address'   => 'Dhaka, Bangladesh',
            'logo'      => 'default.png',
        ]);
    }
}
