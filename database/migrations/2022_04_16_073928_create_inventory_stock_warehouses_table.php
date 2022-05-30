<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kio_inventory_stock_warehouses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unique(['branch_id', 'warehouse_code']);
            $table->uuid('branch_id');
            $table->string('warehouse_code');
            $table->string('warehouse_name');
            $table->string('notes');
            $table->timestamp('record_entry_datetime');
            $table->uuid('record_entry_user_id');
            $table->timestamp('record_update_datetime')->nullable();
            $table->uuid('record_update_user_id')->nullable();
            $table->string('record_status');
            $table->foreign('branch_id')->references('id')->on('kio_branches')->onDelete('cascade');
            $table->foreign('record_entry_user_id')->references('id')->on('kio_users')->onDelete('cascade');
            $table->foreign('record_update_user_id')->references('id')->on('kio_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kio_inventory_stock_warehouses');
    }
};
