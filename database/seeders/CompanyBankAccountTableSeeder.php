<?php

use App\Models\CompanyBankAccount;
use Illuminate\Database\Seeder;

class CompanyBankAccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyBankAccount::firstOrCreate(['id' => 1],[
                'company_id'        => 1,
                'account_name'      => "Pacific Design",
                'account_number'    => "0012",
                'bank_name'         => "IBBl",
                'branch'            => "Dhanmondi-32",
                'swift_code'        => "sw-001",
            ]);

        CompanyBankAccount::firstOrCreate(['id' => 2],[
                'company_id'        => 1,
                'account_name'      => "Smart Bank",
                'account_number'    => "00165",
                'bank_name'         => "DBBl",
                'branch'            => "Dhanmondi-32",
                'swift_code'        => "sw-001",
            ]);
    }
}
