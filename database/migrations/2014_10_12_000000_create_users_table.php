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
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('name');
            $table->string('cpf')->unique();
            $table->string('rg')->unique();
            $table->string('genre');
            $table->date('birthday');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('condominium');
            $table->string('apartmentNumber');
            $table->string('block');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('isAdm');
            $table->bigInteger('adminId')->nullable();
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
