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
        Schema::create('kio_users_roles', function (Blueprint $table) {
            $table->uuid('user_id');
            $table->uuid('role_id');

            // $table->foreign('user_id')->references('id')->on('kio_users')->onDelete('cascade');
            // $table->foreign('role_id')->references('id')->on('kio_roles')->onDelete('cascade');

            $table->primary(['user_id','role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kio_users_roles');
    }
};
