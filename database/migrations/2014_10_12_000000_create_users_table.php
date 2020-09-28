<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('nick_name')->nullable();
            $table->string('real_name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->unique()->nullable();
            $table->string('qq')->unique()->nullable();
            $table->string('wechat')->unique()->nullable();
            $table->string('sex')->nullable();
            $table->string('avatar')->nullable(); //头像
            $table->string('introduction')->nullable(); //座右铭
            $table->timestamp('email_verified_at')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_position')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('county')->nullable();
            $table->string('address')->nullable();
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
