<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->integer('phone_carrier_id');
            $table->string('password');
            $table->string('alias')->unique();
            $table->string('email_token')->nullable(); //email verification token
            $table->string('avatar')->nullable();
            $table->string('intel')->nullable(); //background info
            $table->enum('role', [ 
                'closed', 
                'inactive',
                'phone_verified',
                'email_verified',
                'both_verified',
                'moderator',
                'admin',
                'super_admin' 
            ])->default('inactive');
            
            $table->timestamps();
            $table->rememberToken(); //rememberMe
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }

}
