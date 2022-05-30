<?php

namespace Database\Seeders;

use App\Models\EmployeeSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(PersonEmployeeSeeder::class);
        $this->call(PersonPatientSeeder::class);
        $this->call(PersonInsuranceSeeder::class);
        $this->call(PersonScheduleSeeder::class);
        $this->call(PersonDemographySeeder::class);
        $this->call(IcdCategorySeeder::class);
        $this->call(IcdSeeder::class);
        $this->call(InventoryStockWarehouseSeeder::class);
        $this->call(InventoryStockLocationSeeder::class);
        $this->call(InventoryStockSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(TariffGroupSeeder::class);
        $this->call(TariffSeeder::class);
    }
}
