<?php

namespace Database\Seeders;

use App\Models\PersonEmployee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PersonEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonEmployee::truncate();

        $csvFile = fopen(base_path("database/seeders/data/person_employees.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                PersonEmployee::create([
                    "id" => $data['0'],
                    "employee_code" => $data['1'],
                    "employee_type" => $data['2'],
                    "nik" => $data['3'],
                    "title" => $data['4'],
                    "fullname" => $data['5'],
                    "print_name" => $data['6'],
                    "gender" => $data['7'],
                    "birth_date" => (!empty($data['8'])) ? Carbon::createFromFormat('d/m/Y', $data['8']) : NULL,
                    "birth_place" => $data['9'],
                    "blood_type" => $data['10'],
                    "bpjs_number" => $data['11'],
                    "mobile1" => $data['12'],
                    "email" => $data['13'],
                    "religion" => $data['14'],
                    "citizenship" => $data['15'],
                    "marital_status" => $data['16'],
                    "education" => $data['17'],
                    "profession" => $data['18'],
                    "notes" => $data['19'],
                    "record_entry_datetime" => Carbon::now(),
                    "record_entry_user_id" => 'c3e2a1c6-5387-4ed2-bb4b-9888d768e4c3',
                    "record_status" => $data['20']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
