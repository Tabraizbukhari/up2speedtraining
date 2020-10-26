<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('packages');
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('edit0',40)->nullable();
            $table->string('edit1',40)->nullable();
            $table->string('edit2',40)->nullable();
            $table->string('edit3',40)->nullable();
            $table->string('edit4',40)->nullable();
            $table->string('edit5',40)->nullable();
            $table->string('edit6',40)->nullable();
            $table->string('edit7',40)->nullable();
            $table->string('edit8',40)->nullable();
            $table->string('edit9',40)->nullable();
            $table->string('edit10',40)->nullable();
            $table->string('edit11',40)->nullable();
            $table->string('edit12',40)->nullable();
            $table->string('edit13',40)->nullable();
            $table->string('edit14',40)->nullable();
            $table->string('edit15',40)->nullable();
            $table->string('edit16',40)->nullable();
            $table->string('edit17',40)->nullable();
            $table->string('edit18',40)->nullable();
            $table->string('edit19',40)->nullable();
            $table->string('edit20',40)->nullable();
            $table->string('edit21',40)->nullable();
            $table->string('edit22',40)->nullable();
            $table->string('edit23',40)->nullable();
            $table->string('edit24',40)->nullable();
            $table->string('edit25',40)->nullable();
            $table->string('edit26',40)->nullable();
            $table->string('edit27',40)->nullable();
            $table->string('edit28',40)->nullable();
            $table->string('edit29',40)->nullable();
            $table->string('edit30',40)->nullable();
            $table->string('edit31',40)->nullable();
            $table->string('edit32',40)->nullable();
            $table->string('edit33',40)->nullable();
            $table->string('edit34',40)->nullable();
            $table->string('edit35',40)->nullable();
            $table->string('edit36',40)->nullable();
            $table->string('edit37',40)->nullable();
            $table->string('edit38',40)->nullable();
            $table->string('edit39',40)->nullable();
            $table->string('edit40',40)->nullable();
            $table->string('edit41',40)->nullable();
            $table->string('edit42',40)->nullable();
            $table->string('edit43',40)->nullable();
            $table->string('add43cat',40)->nullable();
            $table->string('add2ex',40)->nullable();
            $table->string('add5ex',40)->nullable();
            $table->string('add12ex',40)->nullable();
            $table->string('add44ex',40)->nullable();
            $table->string('add23ex',40)->nullable();
            $table->string('add25ex',40)->nullable();
            $table->string('add27ex',40)->nullable();
            $table->string('add30ex',40)->nullable();
            $table->string('add33ex',40)->nullable();
            $table->string('add36ex',40)->nullable();
            $table->string('add43ex',40)->nullable();
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
        Schema::table('encounters', function(Blueprint $table)
        {
            $table->dropForeign('patient_id');
            
        });

        Schema::dropIfExists('packages');
    }
}
