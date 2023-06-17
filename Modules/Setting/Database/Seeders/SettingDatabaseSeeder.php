<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\Entities\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'company_name' => 'Alfamart POS',
            'company_email' => 'alfamart@mail.com',
            'company_phone' => '08123456789',
            'notification_email' => 'notification@mail.com',
            'default_currency_id' => 2,
            'default_currency_position' => 'prefix',
            'footer_text' => 'Alfamart POS © 2023 || EAS PBKK D 5025201003',
            'company_address' => 'Surabaya, Indonesia'
        ]);
    }
}
