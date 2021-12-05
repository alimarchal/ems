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
            $table->id();
            $table->string('employee_code')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('father_husband_name')->nullable();
            $table->string('cnic')->unique();
            $table->date('data_of_birth')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->unique();
            $table->string('gender')->nullable();
            $table->string('legal_heir')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('district_city')->nullable();
            $table->string('leave_status')->nullable();
            $table->string('profile_path')->nullable();
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
