<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned;
            $table->integer('address_id')->unsigned;
            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('address_id')->references('id')->on('addresses');
            $table->string('phone_number',11);
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
        Schema::dropIfExists('customers');
        $table->dropForeign(['user_id']);
        // $table->dropForeign(['address_id']);
    }
}
