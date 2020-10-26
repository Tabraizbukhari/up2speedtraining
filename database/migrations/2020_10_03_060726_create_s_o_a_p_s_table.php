<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSOAPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('s_o_a_p_s');
        Schema::create('s_o_a_p_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('visit_id');
            $table->string('chiefcomplaints',300)->nullable();
            $table->string('populatecervical',20)->nullable();
            $table->string('tendernesscervical',20)->nullable();
            $table->string('populatethoracic',20)->nullable();
            $table->string('tendernessthoracic',20)->nullable();
            $table->string('populatelumbar',20)->nullable();
            $table->string('tendernesslumbar',20)->nullable();
            $table->string('populateall',20)->nullable();
            $table->string('tendernessall',20)->nullable();
            $table->string('CervicalLTfixation',5)->nullable();
            $table->string('CervicalRTfixation',5)->nullable();
            $table->string('OCCLTfixation',5)->nullable();
            $table->string('OCCRTfixation',5)->nullable();
            $table->string('C1LTfixation',5)->nullable();
            $table->string('C1RTfixation',5)->nullable();
            $table->string('C2LTfixation',5)->nullable();
            $table->string('C2RTfixation',5)->nullable();
            $table->string('C3LTfixation',5)->nullable();
            $table->string('C3RTfixation',5)->nullable();
            $table->string('C4LTfixation',5)->nullable();
            $table->string('C4RTfixation',5)->nullable();
            $table->string('C5LTfixation',5)->nullable();
            $table->string('C5RTfixation',5)->nullable();
            $table->string('C6LTfixation',5)->nullable();
            $table->string('C6RTfixation',5)->nullable();
            $table->string('C7LTfixation',5)->nullable();
            $table->string('C7RTfixation',5)->nullable();
            $table->string('CervicalLTadjustment',5)->nullable();
            $table->string('CervicalRTadjustment',5)->nullable();
            $table->string('C1LTadjustment',5)->nullable();
            $table->string('C1RTadjustment',5)->nullable();
            $table->string('C2LTadjustment',5)->nullable();
            $table->string('C2RTadjustment',5)->nullable();
            $table->string('C3LTadjustment',5)->nullable();
            $table->string('C3RTadjustment',5)->nullable();
            $table->string('C4LTadjustment',5)->nullable();
            $table->string('C4RTadjustment',5)->nullable();
            $table->string('C5LTadjustment',5)->nullable();
            $table->string('C5RTadjustment',5)->nullable();
            $table->string('C6LTadjustment',5)->nullable();
            $table->string('C6RTadjustment',5)->nullable();
            $table->string('C7LTadjustment',5)->nullable();
            $table->string('C7RTadjustment',5)->nullable();
            $table->string('ThoracicLTfixation',5)->nullable();
            $table->string('ThoracicRTfixation',5)->nullable();
            $table->string('ThoracicLTadjustment',5)->nullable();
            $table->string('ThoracicRTadjustment',5)->nullable();
            $table->string('T1LTfixation',5)->nullable();
            $table->string('T1RTfixation',5)->nullable();
            $table->string('T2LTfixation',5)->nullable();
            $table->string('T2RTfixation',5)->nullable();
            $table->string('T3LTfixation',5)->nullable();
            $table->string('T3RTfixation',5)->nullable();
            $table->string('T4LTfixation',5)->nullable();
            $table->string('T4RTfixation',5)->nullable();
            $table->string('T5LTfixation',5)->nullable();
            $table->string('T5RTfixation',5)->nullable();
            $table->string('T6LTfixation',5)->nullable();
            $table->string('T6RTfixation',5)->nullable();
            $table->string('T7LTfixation',5)->nullable();
            $table->string('T7RTfixation',5)->nullable();
            $table->string('T8LTfixation',5)->nullable();
            $table->string('T8RTfixation',5)->nullable();
            $table->string('T9LTfixation',5)->nullable();
            $table->string('T9RTfixation',5)->nullable();
            $table->string('T10LTfixation',5)->nullable();
            $table->string('T10RTfixation',5)->nullable();
            $table->string('T11LTfixation',5)->nullable();
            $table->string('T11RTfixation',5)->nullable();
            $table->string('T12LTfixation',5)->nullable();
            $table->string('T12RTfixation',5)->nullable();
            $table->string('T1LTadjustment',5)->nullable();
            $table->string('T1RTadjustment',5)->nullable();
            $table->string('T2LTadjustment',5)->nullable();
            $table->string('T2RTadjustment',5)->nullable();
            $table->string('T3LTadjustment',5)->nullable();
            $table->string('T3RTadjustmentn',5)->nullable();
            $table->string('T4LTadjustment',5)->nullable();
            $table->string('T4RTadjustment',5)->nullable();
            $table->string('T5LTadjustment',5)->nullable();
            $table->string('T5RTadjustment',5)->nullable();
            $table->string('T6LTadjustment',5)->nullable();
            $table->string('T6RTadjustment',5)->nullable();
            $table->string('T7LTadjustment',5)->nullable();
            $table->string('T7RTadjustment',5)->nullable();
            $table->string('T8LTadjustment',5)->nullable();
            $table->string('T8RTadjustment',5)->nullable();
            $table->string('T9LTadjustment',5)->nullable();
            $table->string('T9RTadjustment',5)->nullable();
            $table->string('T10LTadjustment',5)->nullable();
            $table->string('T10RTadjustment',5)->nullable();
            $table->string('T11LTadjustment',5)->nullable();
            $table->string('T11RTadjustment',5)->nullable();
            $table->string('T12LTadjustment',5)->nullable();
            $table->string('T12RTadjustment',5)->nullable();
            $table->string('LumbarLTfixation',5)->nullable();
            $table->string('LumbarRTfixation',5)->nullable();
            $table->string('L1LTfixation',5)->nullable();
            $table->string('L1RTfixation',5)->nullable();
            $table->string('L2LTfixation',5)->nullable();
            $table->string('L2RTfixation',5)->nullable();
            $table->string('L3LTfixation',5)->nullable();
            $table->string('L3RTfixation',5)->nullable();
            $table->string('L4LTfixation',5)->nullable();
            $table->string('L4RTfixation',5)->nullable();
            $table->string('L5LTfixation',5)->nullable();
            $table->string('L5RTfixation',5)->nullable();
            $table->string('L1LTadjustment',5)->nullable();
            $table->string('L1RTadjustment',5)->nullable();
            $table->string('L2LTadjustment',5)->nullable();
            $table->string('L2RTadjustment',5)->nullable();
            $table->string('L3LTadjustment',5)->nullable();
            $table->string('L3RTadjustment',5)->nullable();
            $table->string('L4LTadjustment',5)->nullable();
            $table->string('L4RTadjustment',5)->nullable();
            $table->string('L5LTadjustment',5)->nullable();
            $table->string('L5RTadjustment',5)->nullable();
            $table->string('SacLTfixation',5)->nullable();
            $table->string('SacRTfixation',5)->nullable();
            $table->string('SacLTadjustment',5)->nullable();
            $table->string('SacRTadjustment',5)->nullable();
            $table->string('CoccyxLTfixation',5)->nullable();
            $table->string('CoccyxRTfixation',5)->nullable();
            $table->string('CoccyxLTadjustment',5)->nullable();
            $table->string('CoccyxRTadjustment',5)->nullable();

            $table->string('PubsLTfixation',5)->nullable();
            $table->string('PubsRTfixation',5)->nullable();
            $table->string('PubsLTadjustment',5)->nullable();
            $table->string('PubsRTadjustment',5)->nullable();

            $table->string('PelvisLTfixation',5)->nullable();
            $table->string('PelvisRTfixation',5)->nullable();
            $table->string('PelvisLTadjustment',5)->nullable();
            $table->string('PelvisRTadjustment',5)->nullable();

            $table->string('RSILTfixation',5)->nullable();
            $table->string('RSIRTfixation',5)->nullable();
            $table->string('RSILTadjustment',5)->nullable();
            $table->string('RSIRTadjustment',5)->nullable();

            $table->string('LSILTfixation',5)->nullable();
            $table->string('LSIRTfixation',5)->nullable();
            $table->string('LSILTadjustment',5)->nullable();
            $table->string('LSIRTadjustment',5)->nullable();

            $table->string('SphenoidLTfixation',5)->nullable();
            $table->string('SphenoidRTfixation',5)->nullable();
            $table->string('SphenoidLTadjustment',5)->nullable();
            $table->string('SphenoidRTadjustment',5)->nullable();

            $table->string('TMJLTfixation',5)->nullable();
            $table->string('TMJRTfixation',5)->nullable();
            $table->string('TMJLTadjustment',5)->nullable();
            $table->string('TMJRTadjustment',5)->nullable();


            $table->string('OCCExLTfixation',5)->nullable();
            $table->string('OCCExRTfixation',5)->nullable();
            $table->string('OCCExLTadjustment',5)->nullable();
            $table->string('OCCExRTadjustment',5)->nullable();

            $table->string('ClavicleLTfixation',5)->nullable();
            $table->string('ClavicleRTfixation',5)->nullable();
            $table->string('ClavicleLTadjustment',5)->nullable();
            $table->string('ClavicleRTadjustment',5)->nullable();

            $table->string('ShoulderLTfixation',5)->nullable();
            $table->string('ShoulderRTfixation',5)->nullable();
            $table->string('ShoulderLTadjustment',5)->nullable();
            $table->string('ShoulderRTadjustment',5)->nullable();

            $table->string('ElbowLTfixation',5)->nullable();
            $table->string('ElbowRTfixation',5)->nullable();
            $table->string('ElbowLTadjustment',5)->nullable();
            $table->string('ElbowRTadjustment',5)->nullable();

            $table->string('WristLTfixation',5)->nullable();
            $table->string('WristRTfixation',5)->nullable();
            $table->string('WristLTadjustment',5)->nullable();
            $table->string('WristRTadjustment',5)->nullable();

            $table->string('HandLTfixation',5)->nullable();
            $table->string('HandRTfixation',5)->nullable();
            $table->string('HandLTadjustment',5)->nullable();
            $table->string('HandRTadjustment',5)->nullable();

            $table->string('RibsLTfixation',5)->nullable();
            $table->string('RibsRTfixation',5)->nullable();
            $table->string('RibsLTadjustment',5)->nullable();
            $table->string('RibsRTadjustment',5)->nullable();

            $table->string('HipLTfixation',5)->nullable();
            $table->string('HipRTfixation',5)->nullable();
            $table->string('HipLTadjustment',5)->nullable();
            $table->string('HipRTadjustment',5)->nullable();

            $table->string('KneeLTfixation',5)->nullable();
            $table->string('KneeRTfixation',5)->nullable();
            $table->string('KneeLTadjustment',5)->nullable();
            $table->string('KneeRTadjustment',5)->nullable();

            $table->string('AnkleLTfixation',5)->nullable();
            $table->string('AnkleRTfixation',5)->nullable();
            $table->string('AnkleLTadjustment',5)->nullable();
            $table->string('AnkleRTadjustment',5)->nullable();

            $table->string('FootLTfixation',5)->nullable();
            $table->string('FootRTfixation',5)->nullable();
            $table->string('FootLTadjustment',5)->nullable();
            $table->string('FootRTadjustment',5)->nullable();

            $table->string('OtherLTfixation',5)->nullable();
            $table->string('OtherRTfixation',5)->nullable();
            $table->string('OtherLTadjustment',5)->nullable();
            $table->string('OtherRTadjustment',5)->nullable();

            $table->string('CervicalLTtenderness',1)->nullable();
            $table->string('CervicalRTtenderness',1)->nullable();

            $table->string('OCCLTtenderness',1)->nullable();
            $table->string('OCCRTtenderness',1)->nullable();

            $table->string('C1LTtenderness',1)->nullable();
            $table->string('C1RTtenderness',1)->nullable();
            $table->string('C2LTtenderness',1)->nullable();
            $table->string('C2RTtenderness',1)->nullable();
            $table->string('C3LTtenderness',1)->nullable();
            $table->string('C3RTtenderness',1)->nullable();
            $table->string('C4LTtenderness',1)->nullable();
            $table->string('C4RTtenderness',1)->nullable();
            $table->string('C5LTtenderness',1)->nullable();
            $table->string('C5RTtenderness',1)->nullable();
            $table->string('C6LTtenderness',1)->nullable();
            $table->string('C6RTtenderness',1)->nullable();
            $table->string('C7LTtenderness',1)->nullable();
            $table->string('C7RTtenderness',1)->nullable();

            $table->string('ThoracicLTtenderness',1)->nullable();
            $table->string('ThoracicRTtenderness',1)->nullable();
            $table->string('T1LTtenderness',1)->nullable();
            $table->string('T1RTtenderness',1)->nullable();
            $table->string('T2LTtenderness',1)->nullable();
            $table->string('T2RTtenderness',1)->nullable();
            $table->string('T3LTtenderness',1)->nullable();
            $table->string('T3RTtenderness',1)->nullable();
            $table->string('T4LTtenderness',1)->nullable();
            $table->string('T4RTtenderness',1)->nullable();
            $table->string('T5LTtenderness',1)->nullable();
            $table->string('T5RTtenderness',1)->nullable();
            $table->string('T6LTtenderness',1)->nullable();
            $table->string('T6RTtenderness',1)->nullable();
            $table->string('T7LTtenderness',1)->nullable();
            $table->string('T7RTtenderness',1)->nullable();
            $table->string('T8LTtenderness',1)->nullable();
            $table->string('T8RTtenderness',1)->nullable();
            $table->string('T9LTtenderness',1)->nullable();
            $table->string('T9RTtenderness',1)->nullable();
            $table->string('T10LTtenderness',1)->nullable();
            $table->string('T10RTtenderness',1)->nullable();
            $table->string('T11LTtenderness',1)->nullable();
            $table->string('T12RTtenderness',1)->nullable();

            $table->string('LumbarLTtenderness',1)->nullable();
            $table->string('LumbarRTtenderness',1)->nullable();
            $table->string('L1LTtenderness',1)->nullable();
            $table->string('L1RTtenderness',1)->nullable();
            $table->string('L2LTtenderness',1)->nullable();
            $table->string('L2RTtenderness',1)->nullable();
            $table->string('L3LTtenderness',1)->nullable();
            $table->string('L3RTtenderness',1)->nullable();
            $table->string('L4LTtenderness',1)->nullable();
            $table->string('L4RTtenderness',1)->nullable();
            $table->string('L5LTtenderness',1)->nullable();
            $table->string('L5RTtenderness',1)->nullable();

            $table->string('SacLTtenderness',1)->nullable();
            $table->string('SacRTtenderness',1)->nullable();
            $table->string('CoccyxLTtenderness',1)->nullable();
            $table->string('CoccyxRTtenderness',1)->nullable();
            $table->string('PubsLTtenderness',1)->nullable();
            $table->string('PubsRTtenderness',1)->nullable();
            $table->string('PelvisLTtenderness',1)->nullable();
            $table->string('PelvisRTtenderness',1)->nullable();
            $table->string('RSILTtenderness',1)->nullable();
            $table->string('RSIRTtenderness',1)->nullable();
            $table->string('LSILTtenderness',1)->nullable();
            $table->string('LSIRTtenderness',1)->nullable();
            $table->string('SphenoidLTtenderness',1)->nullable();
            $table->string('SphenoidRTtenderness',1)->nullable();
            $table->string('TMJLTtenderness',1)->nullable();
            $table->string('TMJRTtenderness',1)->nullable();
            $table->string('OCCExLTtenderness',1)->nullable();
            $table->string('OCCExRTtenderness',1)->nullable();
            $table->string('ClavicleExLTtenderness',1)->nullable();
            $table->string('ClavicleExRTtenderness',1)->nullable();
            $table->string('ShoulderExLTtenderness',1)->nullable();
            $table->string('ShoulderExRTtenderness',1)->nullable();
            $table->string('ElbowExLTtenderness',1)->nullable();
            $table->string('ElbowExRTtenderness',1)->nullable();
            $table->string('WristExLTtenderness',1)->nullable();
            $table->string('WristExRTtenderness',1)->nullable();
            $table->string('HandExLTtenderness',1)->nullable();
            $table->string('HandExRTtenderness',1)->nullable();
            $table->string('RibsExLTtenderness',1)->nullable();
            $table->string('RibsExRTtenderness',1)->nullable();
            $table->string('HipExLTtenderness',1)->nullable();
            $table->string('HipsExRTtenderness',1)->nullable();
            $table->string('KneeExLTtenderness',1)->nullable();
            $table->string('KneeExRTtenderness',1)->nullable();
            $table->string('AnkleExLTtenderness',1)->nullable();
            $table->string('AnkleExRTtenderness',1)->nullable();
            $table->string('FootExLTtenderness',1)->nullable();
            $table->string('FootExRTtenderness',1)->nullable();
            $table->string('OtherExLTtenderness',1)->nullable();
            $table->string('OthersExRTtenderness',1)->nullable();

            $table->string('Cervicaladjustmenttype',50)->nullable();
            $table->string('OCCadjustmenttype',50)->nullable();
            $table->string('C1adjustmenttype',50)->nullable();
            $table->string('C2adjustmenttype',50)->nullable();
            $table->string('C3adjustmenttype',50)->nullable();
            $table->string('C4adjustmenttype',50)->nullable();
            $table->string('C5adjustmenttype',50)->nullable();
            $table->string('C6adjustmenttype',50)->nullable();
            $table->string('C7adjustmenttype',50)->nullable();
            $table->string('Thoracicadjustmenttype',50)->nullable();
            $table->string('T1adjustmenttype',50)->nullable();
            $table->string('T2adjustmenttype',50)->nullable();
            $table->string('T3adjustmenttype',50)->nullable();
            $table->string('T4adjustmenttype',50)->nullable();
            $table->string('T5adjustmenttype',50)->nullable();
            $table->string('T6adjustmenttype',50)->nullable();
            $table->string('T7adjustmenttype',50)->nullable();
            $table->string('T8adjustmenttype',50)->nullable();
            $table->string('T9adjustmenttype',50)->nullable();
            $table->string('T10adjustmenttype',50)->nullable();
            $table->string('T11adjustmenttype',50)->nullable();
            $table->string('T12adjustmenttype',50)->nullable();
            $table->string('Lumbaradjustmenttype',50)->nullable();
            $table->string('L1adjustmenttype',50)->nullable();
            $table->string('L2adjustmenttype',50)->nullable();
            $table->string('L3adjustmenttype',50)->nullable();
            $table->string('L4adjustmenttype',50)->nullable();
            $table->string('L5adjustmenttype',50)->nullable();
            $table->string('Sacadjustmenttype',50)->nullable();
            $table->string('Coccyxadjustmenttype',50)->nullable();
            $table->string('Pubsadjustmenttype',50)->nullable();
            $table->string('Pelvisadjustmenttype',50)->nullable();
            $table->string('RSIadjustmenttype',50)->nullable();
            $table->string('LSIadjustmenttype',50)->nullable();
            $table->string('Sphenoidadjustmenttype',50)->nullable();
            $table->string('TMJadjustmenttype',50)->nullable();
            $table->string('OCCExadjustmenttype',50)->nullable();
            $table->string('Clavicleadjustmenttype',50)->nullable();
            $table->string('Shoulderadjustmenttype',50)->nullable();
            $table->string('Elbowadjustmenttype',50)->nullable();
            $table->string('Wristadjustmenttype',50)->nullable();
            $table->string('Handadjustmenttype',50)->nullable();
            $table->string('Ribsadjustmenttype',50)->nullable();
            $table->string('Hipadjustmenttype',50)->nullable();
            $table->string('Kneeadjustmenttype',50)->nullable();
            $table->string('Ankleadjustmenttype',50)->nullable();
            $table->string('Footadjustmenttype',50)->nullable();
            $table->string('Otheradjustmenttype',50)->nullable();
            $table->string('conditionstatus',10)->nullable();
            $table->string('currentprogress',10)->nullable();
            $table->string('Improved',55)->nullable();
            $table->string('Worsened',55)->nullable();
            $table->string('numvisits',1)->nullable();
            $table->string('numweeks',1)->nullable();
            $table->string('notes',300)->nullable();
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
            $table->dropForeign('visit_id'); 
      });

      Schema::dropIfExists('s_o_a_p_s');
    }
}
