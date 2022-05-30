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
        Schema::create('kio_person_demographies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('person_id');
            $table->string('person_type');
            $table->text('home_address_line1')->nullable();
            $table->text('home_address_line2')->nullable();
            $table->text('home_address_line3')->nullable();
            $table->string('home_ward')->nullable();
            $table->string('home_district')->nullable();
            $table->string('home_city')->nullable();
            $table->string('home_province')->nullable();
            $table->string('home_postal_code')->nullable();
            $table->text('office_address_line1')->nullable();
            $table->text('office_address_line2')->nullable();
            $table->text('office_address_line3')->nullable();
            $table->string('office_ward')->nullable();
            $table->string('office_district')->nullable();
            $table->string('office_city')->nullable();
            $table->string('office_province')->nullable();
            $table->string('office_postal_code')->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('record_entry_datetime');
            $table->uuid('record_entry_user_id');
            $table->timestamp('record_update_datetime')->nullable();
            $table->uuid('record_update_user_id')->nullable();
            $table->string('record_status');
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
        Schema::dropIfExists('kio_person_demographies');
    }
};
