<?php

namespace Database\Seeders;

use App\Models\PersonDemography;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PersonDemographySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonDemography::truncate();

        $csvFile = fopen(base_path("database/seeders/data/person_demographies.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                PersonDemography::create([
                    "id" => $data['0'],
                    "person_id" => $data['1'],
                    "person_type" => $data['2'],
                    "home_address_line1" => $data['3'],
                    "home_ward" => $data['4'],
                    "home_district" => $data['5'],
                    "home_city" => $data['6'],
                    "home_province" => $data['7'],
                    "home_postal_code" => $data['8'],
                    "notes" => $data['9'],
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
