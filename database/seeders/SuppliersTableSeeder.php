<?php

use App\Models\Company;

use App\Models\User;
use Illuminate\Database\Seeder;
use Module\GeneralStore\Models\Supplier;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::create([

            'company_id'    => Company::find(1)->id,
            'created_by'    => User::find(1)->id,
            'updated_by'    => User::find(1)->id,
            'name'          => 'Supplier 1'
        ]);
    }
}
