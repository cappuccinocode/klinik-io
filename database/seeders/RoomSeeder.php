<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::truncate();

        $csvFile = fopen(base_path("database/seeders/data/rooms.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                Room::create([
                    "id" => $data['0'],
                    "branch_id" => $data['1'],
                    "room_code" => $data['2'],
                    "room_name" => $data['3'],
                    "notes" => $data['4'],
                    "record_entry_datetime" => Carbon::now(),
                    "record_entry_user_id" => 'c3e2a1c6-5387-4ed2-bb4b-9888d768e4c3',
                    "record_status" => $data['5']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
