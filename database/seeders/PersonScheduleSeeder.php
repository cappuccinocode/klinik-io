<?php

namespace Database\Seeders;

use App\Models\PersonSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PersonScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonSchedule::truncate();

        $csvFile = fopen(base_path("database/seeders/data/person_schedules.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                PersonSchedule::create([
                    "id" => $data['0'],
                    "person_employee_id" => $data['1'],
                    "room_id" => $data['2'],
                    "schedule_day" => $data['3'],
                    "schedule_start" => $data['4'],
                    "schedule_end" => $data['5'],
                    "notes" => $data['6'],
                    "record_entry_datetime" => Carbon::now(),
                    "record_entry_user_id" => 'c3e2a1c6-5387-4ed2-bb4b-9888d768e4c3',
                    "record_status" => $data['7']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
