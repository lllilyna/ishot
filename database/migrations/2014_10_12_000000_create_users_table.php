<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nim')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('idLine')->nullable();
            $table->string('noTelp')->nullable();
            $table->string('sekolah')->nullable();
            $table->string('namaTeam');
            $table->boolean('ketua')->default(0);
            $table->boolean('kbmsi')->default(0);
            $table->boolean('admin')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
