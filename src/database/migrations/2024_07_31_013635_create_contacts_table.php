<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->integer('categry_id');
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->tinyInteger('gender');
            $table->string('email', 255);
            $table->integer('tell');
            $table->string('address', 255);
            $table->string('building', 255);
            $table->text('detale');
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
        Schema::dropIfExists('contacts');
    }
}
