<?php

namespace Database\Seeders;

use App\Models\Tariff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TariffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tariff::truncate();
        Tariff::query()->delete();

        $csvFile = fopen(base_path("database/seeders/data/tariffs.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                Tariff::create([
                    "id" => $data['0'],
                    "tariff_group_id" => $data['1'],
                    "tariff_code" => $data['2'],
                    "tariff_name" => $data['3'],
                    "tariff_patient" => $data['4'],
                    "tariff_percentage" => $data['5'],
                    "doctor_fee" => $data['6'],
                    "assistant_fee" => $data['7'],
                    "clinic_fee" => $data['8'],
                    "material_cost" => $data['9'],
                    "record_entry_datetime" => Carbon::now(),
                    "record_entry_user_id" => 'c3e2a1c6-5387-4ed2-bb4b-9888d768e4c3',
                    "record_status" => $data['10']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
