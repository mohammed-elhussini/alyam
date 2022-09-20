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
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->after('name');
            $table->string('last_name');
            $table->string('nationality');
            $table->date('birthday');
            $table->string('phone')->unique();
            $table->string('driving_license')->unique();
            $table->date('driving_license_exp');
            $table->string('id_number')->unique();
            $table->longText('avatar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            Schema::dropIfExists('users');
        });
    }
};
