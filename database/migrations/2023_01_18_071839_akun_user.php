<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AkunUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AkunUser', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->integer('level')->nullable()->comment('1. admin, 2. Agen X');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AkunUser');
    }
}
