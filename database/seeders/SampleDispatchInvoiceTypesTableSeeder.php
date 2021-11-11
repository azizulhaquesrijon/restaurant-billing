<?php

use Illuminate\Database\Seeder;
use Module\Garments\Models\Merchandising\SampleDispatch\SampleDispatchInvoiceType;

class SampleDispatchInvoiceTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SampleDispatchInvoiceType::create([
            'name' => 'SMS'
        ]);
        
        SampleDispatchInvoiceType::create([
            'name' => 'Regular'
        ]);
    }
}
