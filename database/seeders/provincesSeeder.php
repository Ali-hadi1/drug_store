<?php

namespace Database\Seeders;

use App\Models\province;
use Illuminate\Database\Seeder;

class provincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        province::create([
            'en_name' => 'Kabul',
            'pr_name' => 'کابل',
            'province_code' => '101'
        ]);

        province::create([
            'en_name' => 'Ghazni',
            'pr_name' => 'غزنی',
            'province_code' => '103'
        ]);

        province::create([
            'en_name' => 'Heyrat',
            'pr_name' =>'هرات',
            'province_code' => '122'
        ]);
    }
}
