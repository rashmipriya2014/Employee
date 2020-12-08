<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_name');
            $table->text('address_1')->nullable();
            $table->text('address_2')->nullable();
            $table->text('location')->nullable();
            $table->text('postal_code')->nullable();
            $table->text('postal_area')->nullable();
            $table->text('taluka')->nullable();
            $table->text('suburbs')->nullable();
            $table->text('direction')->nullable();
            $table->text('city');
            $table->text('district')->nullable();
            $table->text('state')->nullable();
            $table->text('country')->nullable();
            $table->longText('mobile')->nullable();
            $table->longText('whatsapp')->nullable();
            $table->longText('email')->nullable();
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
        Schema::dropIfExists('employee_details');
    }
}
