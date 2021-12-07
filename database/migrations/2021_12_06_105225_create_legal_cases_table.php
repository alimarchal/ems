<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_cases', function (Blueprint $table) {
            $table->id();
            $table->string('department_id')->nullable();
            $table->string('case_title')->nullable();
            $table->text('description')->nullable();
            $table->string('attachment')->nullable();
            $table->date('decision_date')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('legal_cases');
    }
}
