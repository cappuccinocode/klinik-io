<?php

namespace Database\Seeders;

use App\Models\TariffGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TariffGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TariffGroup::truncate();
        TariffGroup::query()->delete();

        $csvFile = fopen(base_path("database/seeders/data/tariff_groups.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                TariffGroup::create([
                    "id" => $data['0'],
                    "tariff_group_name" => $data['1'],
                    "record_entry_datetime" => Carbon::now(),
                    "record_entry_user_id" => 'c3e2a1c6-5387-4ed2-bb4b-9888d768e4c3',
                    "record_status" => $data['2']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
