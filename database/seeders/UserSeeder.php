<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        User::query()->delete();

        $csvFile = fopen(base_path("database/seeders/data/users.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                User::create([
                    "id" => $data['0'],
                    "user_code" => $data['1'],
                    "employee_code" => $data['2'],
                    "username" => $data['3'],
                    "email" => $data['4'],
                    "password" => $data['5'],
                    "record_entry_datetime" => Carbon::now(),
                    "record_entry_user_id" => 'c3e2a1c6-5387-4ed2-bb4b-9888d768e4c3',
                    "record_status" => $data['6']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
