<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments("id");
            $table->string("username", 50)->unique();
            $table->string("email", 50)->unique();
            $table->string("password");
            $table->string("auth_token", 100)->unique();
            $table->string("photo")->default("default.jpg");
            $table->timestamp("created_at")->useCurrent();
            $table->boolean("is_active")->default(false);
            $table->datetime("last_login")->nullable();
            $table->boolean("is_seller")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
