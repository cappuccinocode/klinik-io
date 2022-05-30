<?php

namespace Database\Seeders;

use App\Models\PersonPatient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PersonPatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonPatient::truncate();

        $csvFile = fopen(base_path("database/seeders/data/person_patients.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                PersonPatient::create([
                    "id" => $data['0'],
                    "mr_number" => $data['1'],
                    "nik" => $data['2'],
                    "title" => $data['3'],
                    "fullname" => $data['4'],
                    "print_name" => $data['5'],
                    "gender" => $data['6'],
                    "birth_date" => (!empty($data['7'])) ? Carbon::createFromFormat('d/m/Y', $data['7']) : NULL,
                    "birth_place" => $data['8'],
                    "blood_type" => $data['9'],
                    "bpjs_number" => $data['10'],
                    "mobile1" => $data['11'],
                    "email" => $data['12'],
                    "religion" => $data['13'],
                    "citizenship" => $data['14'],
                    "marital_status" => $data['15'],
                    "education" => $data['16'],
                    "profession" => $data['17'],
                    "notes" => $data['18'],
                    "record_entry_datetime" => Carbon::now(),
                    "record_entry_user_id" => 'c3e2a1c6-5387-4ed2-bb4b-9888d768e4c3',
                    "record_status" => $data['19']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
