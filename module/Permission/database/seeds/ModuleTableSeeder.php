<?php

namespace Module\Permission\database\seeds;

use Module\Permission\Models\Module;
use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getModules() ?? [] as $module)
        {
            Module::firstOrCreate([
                'name'  => $module['name'],
            ], [
                'id'        => $module['id'],
                'status'    => $module['status'],
            ]);
        }
    }

    private function getModules()
    {
        return [
            ['id' => '1',   'status' => '1', 'name' => 'Global Setting'],
            ['id' => '2',   'status' => '1', 'name' => 'User Access'],
            ['id' => '3',   'status' => '1', 'name' => 'HRM'],
            ['id' => '4',   'status' => '1', 'name' => 'General Store'],
            ['id' => '5',   'status' => '1', 'name' => 'Merchandising'],
            ['id' => '6',   'status' => '1', 'name' => 'Inventory'],
            ['id' => '7',   'status' => '1', 'name' => 'Commercial'],
            ['id' => '8',   'status' => '1', 'name' => 'News & Events'],
            ['id' => '9',   'status' => '1', 'name' => 'Payment'],
            ['id' => '10',  'status' => '1', 'name' => 'Account & Finance'],
            ['id' => '11',  'status' => '1', 'name' => 'Employee Permission'],
            ['id' => '12',  'status' => '1', 'name' => 'Knitting & Dyeing']
        ];
    }
}
