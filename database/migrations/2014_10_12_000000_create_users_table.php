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
        Schema::create('um_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('role_id');
            $table->string('name',50);
            $table->string('image',100)->unique();
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',100);
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