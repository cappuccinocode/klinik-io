<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Branch::truncate();
        Branch::query()->delete();

        $csvFile = fopen(base_path("database/seeders/data/branches.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                Branch::create([
                    "id" => $data['0'],
                    "branch_code" => $data['1'],
                    "branch_name" => $data['2'],
                    "notes" => $data['3'],
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
