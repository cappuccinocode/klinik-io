<?php

namespace Database\Seeders;

use App\Models\Icd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class IcdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Icd::truncate();

        $csvFile = fopen(base_path("database/seeders/data/icds.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                Icd::create([
                    "id" => $data['0'],
                    "icd_category_id" => $data['1'],
                    "icd_code" => $data['2'],
                    "icd_description" => $data['3'],
                    "record_entry_datetime" => Carbon::now(),
                    "record_entry_user_id" => 'c3e2a1c6-5387-4ed2-bb4b-9888d768e4c3',
                    "record_status" => $data['4']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
