<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('exams');
        Schema::create('exams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->string('zv0observed',5)->nullable();
            $table->string('zv0painint',5)->nullable();
            $table->string('zv0notes',25)->nullable();
            $table->string('zv1observed',5)->nullable();
            $table->string('zv1painint',5)->nullable();
            $table->string('zv1notes',25)->nullable();
            $table->string('zv2observed',5)->nullable();
            $table->string('zv2painint',5)->nullable();
            $table->string('zv2notes',25)->nullable();
            $table->string('zv3observed',5)->nullable();
            $table->string('zv3painint',5)->nullable();
            $table->string('zv3notes',25)->nullable();
            $table->string('zv4observed',5)->nullable();
            $table->string('zv4painint',5)->nullable();
            $table->string('zv4notes',25)->nullable();
            $table->string('zv5observed',5)->nullable();
            $table->string('zv5painint',5)->nullable();
            $table->string('zv5notes',25)->nullable();//Cervical ROM
            $table->string('ov0observed',5)->nullable();
            $table->string('ov0painint',5)->nullable();
            $table->string('ov0notes',25)->nullable();
            $table->string('ov1observed',5)->nullable();
            $table->string('ov1painint',5)->nullable();
            $table->string('ov1notes',25)->nullable();
            $table->string('ov2observed',5)->nullable();
            $table->string('ov2painint',5)->nullable();
            $table->string('ov2notes',25)->nullable();
            $table->string('ov3observed',5)->nullable();
            $table->string('ov3painint',5)->nullable();
            $table->string('ov3notes',25)->nullable();
            $table->string('ov4observed',5)->nullable();
            $table->string('ov4painint',5)->nullable();
            $table->string('ov4notes',25)->nullable();
            $table->string('ov5observed',5)->nullable();
            $table->string('ov5painint',5)->nullable();
            $table->string('ov5notes',25)->nullable();//Lumbar ROM
            $table->string('tv0observed',5)->nullable();
            $table->string('tv0painint',5)->nullable();
            $table->string('tv0notes',25)->nullable();
            $table->string('tv1observed',5)->nullable();
            $table->string('tv1painint',5)->nullable();
            $table->string('tv1notes',25)->nullable();
            $table->string('tv2observed',5)->nullable();
            $table->string('tv2painint',5)->nullable();
            $table->string('tv2notes',25)->nullable();
            $table->string('tv3observed',5)->nullable();
            $table->string('tv3painint',5)->nullable();
            $table->string('tv3notes',25)->nullable();
            $table->string('tv4observed',5)->nullable();
            $table->string('tv4painint',5)->nullable();
            $table->string('tv4notes',25)->nullable();//Thoracic ROM
            $table->string('shoulder',45)->nullable();
            $table->string('thv0observed',5)->nullable();
            $table->string('thv0painint',5)->nullable();
            $table->string('thv0notes',25)->nullable();
            $table->string('thv1observed',5)->nullable();
            $table->string('thv1painint',5)->nullable();
            $table->string('thv1notes',25)->nullable();
            $table->string('thv2observed',5)->nullable();
            $table->string('thv2painint',5)->nullable();
            $table->string('thv2notes',25)->nullable();
            $table->string('thv3observed',5)->nullable();
            $table->string('thv3painint',5)->nullable();
            $table->string('thv3notes',25)->nullable();
            $table->string('thv4observed',5)->nullable();
            $table->string('thv4painint',5)->nullable();
            $table->string('thv4notes',25)->nullable();
            $table->string('thv5observed',5)->nullable();
            $table->string('thv5painint',5)->nullable();
            $table->string('thv5notes',25)->nullable();//Shoulder ROM
            $table->string('wrist',15)->nullable();
            $table->string('fiv0observed',5)->nullable();
            $table->string('fiv0painint',5)->nullable();
            $table->string('fiv0notes',25)->nullable();
            $table->string('fiv1observed',5)->nullable();
            $table->string('fiv1painint',5)->nullable();
            $table->string('fiv1notes',25)->nullable();
            $table->string('fiv2observed',5)->nullable();
            $table->string('fiv2painint',5)->nullable();
            $table->string('fiv2notes',25)->nullable();
            $table->string('fiv3observed',5)->nullable();
            $table->string('fiv3painint',5)->nullable();
            $table->string('fiv3notes',25)->nullable();
            $table->string('fiv4observed',5)->nullable();
            $table->string('fiv4painint',5)->nullable();
            $table->string('fiv4notes',25)->nullable();
            $table->string('fiv5observed',5)->nullable();
            $table->string('fiv5painint',5)->nullable();
            $table->string('fiv5notes',25)->nullable();//Wrist ROM
            $table->string('ankle',15)->nullable();
            $table->string('sxv0observed',5)->nullable();
            $table->string('sxv0painint',5)->nullable();
            $table->string('sxv0notes',25)->nullable();
            $table->string('sxv1observed',5)->nullable();
            $table->string('sxv1painint',5)->nullable();
            $table->string('sxv1notes',25)->nullable();
            $table->string('sxv2observed',5)->nullable();
            $table->string('sxv2painint',5)->nullable();
            $table->string('sxv2notes',25)->nullable();
            $table->string('sxv3observed',5)->nullable();
            $table->string('sxv3painint',5)->nullable();
            $table->string('sxv3notes',25)->nullable();//Ankle ROM
            $table->string('knee',15)->nullable();
            $table->string('sv0observed',5)->nullable();
            $table->string('sv0painint',5)->nullable();
            $table->string('sv0notes',25)->nullable();
            $table->string('sv1observed',5)->nullable();
            $table->string('sv1painint',5)->nullable();
            $table->string('sv1notes',25)->nullable();//Knee ROM
            $table->string('foot',15)->nullable();
            $table->string('ev0observed',5)->nullable();
            $table->string('ev0painint',5)->nullable();
            $table->string('ev0notes',25)->nullable();
            $table->string('ev1observed',5)->nullable();
            $table->string('ev1painint',5)->nullable();
            $table->string('ev1notes',25)->nullable();//foot
            $table->string('hip_rom',15)->nullable();
            $table->string('nv0observed',5)->nullable();
            $table->string('nv0painint',5)->nullable();
            $table->string('nv0notes',25)->nullable();
            $table->string('nv1observed',5)->nullable();
            $table->string('nv1painint',5)->nullable();
            $table->string('nv1notes',25)->nullable();
            $table->string('nv2observed',5)->nullable();
            $table->string('nv2painint',5)->nullable();
            $table->string('nv2notes',25)->nullable();
            $table->string('nv3observed',5)->nullable();
            $table->string('nv3painint',5)->nullable();
            $table->string('nv3notes',25)->nullable();
            $table->string('nv4observed',5)->nullable();
            $table->string('nv4painint',5)->nullable();
            $table->string('nv4notes',25)->nullable();
            $table->string('nv5observed',5)->nullable();
            $table->string('nv5painint',5)->nullable();
            $table->string('nv5notes',25)->nullable();//hip rom
            $table->string('elbow',15)->nullable();
            $table->string('elv0observed',5)->nullable();
            $table->string('elv0painint',5)->nullable();
            $table->string('elv0notes',25)->nullable();
            $table->string('elv1observed',5)->nullable();
            $table->string('elv1painint',5)->nullable();
            $table->string('elv1notes',25)->nullable();
            $table->string('elv2observed',5)->nullable();
            $table->string('elv2painint',5)->nullable();
            $table->string('elv2notes',25)->nullable();
            $table->string('elv3observed',5)->nullable();
            $table->string('elv3painint',5)->nullable();
            $table->string('elv3notes',25)->nullable();//Elbow Rom
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
        Schema::table('exams', function(Blueprint $table)
        {
            $table->dropForeign('patient_id'); 
        });

        Schema::dropIfExists('exams');
    }
}
