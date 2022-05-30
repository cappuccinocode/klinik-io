<?php

namespace Database\Seeders;

use App\Models\InventoryStock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InventoryStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InventoryStock::truncate();

        $csvFile = fopen(base_path("database/seeders/data/inventory_stocks.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                InventoryStock::create([
                    "id" => $data['0'],
                    "sku" => $data['1'],
                    "item_name" => $data['2'],
                    "batch_number" => $data['3'],
                    "product_id" => $data['4'],
                    "suppplier_id" => $data['5'],
                    "brand_id" => $data['6'],
                    "quantity" => $data['7'],
                    "min_reorder_qty" => $data['8'],
                    "location_id" => $data['9'],
                    "expiry_date" => $data['10'],
                    "notes" => $data[''],
                    "record_entry_datetime" => Carbon::now(),
                    "record_entry_user_id" => 'c3e2a1c6-5387-4ed2-bb4b-9888d768e4c3',
                    "record_status" => $data['11']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
