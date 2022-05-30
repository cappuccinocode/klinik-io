<?php

namespace Database\Seeders;

use App\Models\PersonInsurance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PersonInsuranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonInsurance::truncate();

        $csvFile = fopen(base_path("database/seeders/data/person_insurances.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                PersonInsurance::create([
                    "name" => $data['0'],
                    "code" => $data['1'],
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
