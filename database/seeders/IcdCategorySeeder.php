<?php

namespace Database\Seeders;

use App\Models\IcdCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class IcdCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IcdCategory::truncate();

        $csvFile = fopen(base_path("database/seeders/data/icds.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                IcdCategory::create([
                    "id" => $data['0'],
                    "parent_id" => $data['1'],
                    "icd_category_name" => $data['2'],
                    "record_entry_datetime" => Carbon::now(),
                    "record_entry_user_id" => 'c3e2a1c6-5387-4ed2-bb4b-9888d768e4c3',
                    "record_status" => $data['3']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
