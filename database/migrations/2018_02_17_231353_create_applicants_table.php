<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('LastName');
            $table->string('FirstName');
            $table->string('MiddleName');
            $table->string('Address');
            $table->string('EAddress');
            $table->date('Birthdate');
            $table->string('ContactNum');
            $table->unsignedDecimal('EScore', 3, 2)->nullable();
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
