<?php

namespace Database\Seeders;

use App\Models\InventoryStockLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InventoryStockLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InventoryStockLocation::truncate();

        $csvFile = fopen(base_path("database/seeders/data/inventory_stock_locations.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                InventoryStockLocation::create([
                    "id" => $data['0'],
                    "warehouse_id" => $data['1'],
                    "stock_location_code" => $data['2'],
                    "stock_location_name" => $data['3'],
                    "is_scrap_location" => $data['4'],
                    "is_return_location" => $data['5'],
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
