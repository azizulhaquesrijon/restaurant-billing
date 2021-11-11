<?php
use App\Models\SystemSetting;
use Illuminate\Database\Seeder;

class SystemSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getSystemSettingData() as $k => $setting) {
            SystemSetting::firstOrCreate(['key' => $setting['key']], ['value' => $setting['value']]);
        }
    }

    private function getSystemSettingData()
    {
        return [
            ['id' =>  '1',      'key' => 'general_store_reference_no_change',    'value' => NULL],
            ['id' =>  '2',      'key' => 'out_work_date_picker',                 'value' => '0'],
            ['id' =>  '3',      'key' => 'employee_summary_gross_salary_get',    'value' => '0'],
            ['id' =>  '4',      'key' => 'finger_id_get',                        'value' => '0'],
            ['id' =>  '5',      'key' => 'employee_list_card_no',                'value' => '1'],
            ['id' =>  '6',      'key' => 'custom_employee_full_id',              'value' => '0'],
            ['id' =>  '7',      'key' => 'employee_login_option',                'value' => '0'],
            ['id' =>  '8',      'key' => 'employee_attendance_chart',            'value' => '1'],
            ['id' =>  '9',      'key' => 'dashboard',                            'value' => '0'],
            ['id' => '10',      'key' => 'line',                                 'value' => '1'],
            ['id' => '11',      'key' => 'employee_signature',                   'value' => '1'],
            ['id' => '12',      'key' => 'topbar_background_color',              'value' => '#dfe2cd'],
            ['id' => '13',      'key' => 'topbar_text_color',                    'value' => 'white'],
            ['id' => '14',      'key' => 'employee_general_shift',               'value' => '0'],
            ['id' => '15',      'key' => 'leave_recommender_required',           'value' => '1'],
        ];
    }
}
