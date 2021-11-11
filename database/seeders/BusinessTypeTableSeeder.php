<?php

use App\Models\BusinessType;
use Illuminate\Database\Seeder;

class BusinessTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeName = ['Knit', 'Sweater', 'Woven', 'Buying', 'Printing & Embroidery'];

        foreach ($typeName as $key => $value) {

            BusinessType::firstOrCreate([
                'name' => $typeName[$key],
            ]);
        }


    }
}
