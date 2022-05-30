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
        Schema::create('kio_permissions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->unique();
            $table->string('slug');
            $table->timestamp('record_entry_datetime')->nullable();
            $table->uuid('record_entry_user_id');
            $table->timestamp('record_update_datetime')->nullable();
            $table->uuid('record_update_user_id')->nullable();
            $table->string('record_status');

            // $table->foreign('record_entry_user_id')->references('id')->on('kio_permissions')->onDelete('cascade');
            // $table->foreign('record_update_user_id')->references('id')->on('kio_permissions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kio_permissions');
    }
};
