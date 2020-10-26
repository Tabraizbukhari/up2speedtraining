<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encounters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('visit_id');
            $table->string('encounter')->nullable();
            $table->string('markvisit')->nullable();
            $table->string('markstar')->nullable();
            $table->string('omitexams')->nullable();
            $table->string('populateas')->nullable();
            $table->string('percimp')->nullable();
            
            $table->timestamps();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('encounters', function(Blueprint $table)
        {
            $table->dropForeign('patient_id');
            $table->dropForeign('visit_id'); 
        });

        Schema::dropIfExists('encounters');
    }
}
