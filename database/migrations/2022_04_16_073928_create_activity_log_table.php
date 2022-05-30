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
        Schema::create('kio_activity_log', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('level');
            $table->string('error_code');
            $table->string('module');
            $table->text('message');
            $table->text('exception');
            $table->timestamp('record_entry_datetime');
            $table->uuid('record_entry_user_id');
            $table->foreign('record_entry_user_id')->references('id')->on('kio_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kio_activity_log');
    }
};
