<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //creation of table
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('EmpId')->unique();
            $table->string('LastName');
            $table->string('FirstName');
            $table->string('MiddleName');
            $table->string('Address');
            $table->date('Birthdate');
            $table->string('ContactNum');
            $table->string('MothersName');
            $table->string('FathersName');
            $table->date('DateHired');
            $table->string('SSSNum')->nullable();
            $table->string('Tin')->nullable();
            $table->string('PhilNum')->nullable();
            $table->string('PagibigNum')->nullable();
            $table->string('EmpPos');
            $table->string('EmpStatus');
            $table->string('EmpPass');
            $table->string('avatar')->default('pic1.jpg');
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
        Schema::dropIfExists('employees');
    }
}
