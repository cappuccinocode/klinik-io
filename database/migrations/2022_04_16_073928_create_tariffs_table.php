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
        Schema::create('kio_tariffs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('tariff_group_id');
            $table->string('tariff_code')->unique();
            $table->string('tariff_name');
            $table->decimal('tariff_patient',9,3)->default(0);
            $table->decimal('tariff_percentage',5,2)->default(0);
            $table->decimal('doctor_fee',9,3)->default(0);
            $table->decimal('assistant_fee',9,3)->default(0);
            $table->decimal('clinic_fee',9,3)->default(0);
            $table->decimal('material_cost',9,3)->default(0);
            $table->text('notes')->nullable();
            $table->timestamp('record_entry_datetime');
            $table->uuid('record_entry_user_id');
            $table->timestamp('record_update_datetime')->nullable();
            $table->uuid('record_update_user_id')->nullable();
            $table->string('record_status');
            $table->foreign('tariff_group_id')->references('id')->on('kio_tariff_groups')->onDelete('cascade');
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
        Schema::dropIfExists('kio_tariffs');
    }
};
