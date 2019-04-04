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
            $table->binary("photo")->nullable()->default("https://img.icons8.com/color/1600/circled-user-male-skin-type-1-2.png");
            $table->timestamp("created_at")->useCurrent();
            $table->boolean("is_active");
            $table->timestamp("last_login")->useCurrent();
            $table->boolean("is_seller");
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
