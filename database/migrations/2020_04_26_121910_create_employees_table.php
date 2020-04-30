<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id')->unsignedInteger();
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender',['Masculin','Feminin']);
            $table->integer('departement_id')->unsigned();
            $table->string('profession');
            $table->boolean('status')->default(0);
            $table->date('birth_date');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('address_hard')->nullable();
            $table->string('phone')->unique();
            $table->string('address_mail')->unique();
            $table->timestamps();

            $table->foreign('departement_id')->references('id')->on('departements');
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
