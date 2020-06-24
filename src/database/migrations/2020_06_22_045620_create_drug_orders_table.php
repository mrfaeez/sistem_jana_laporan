<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Schema;

class CreateDrugOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql2')->create('drug_orders', function (Blueprint $table) {
            
            $db = DB::connection('mysql')->getDatabaseName();

            $table->string('patient_code');
            $table->primary('patient_code');
            $table->string('drug_name');
            // $table->integer('patient_code');
            // $table->foreign('patient_code')->references('patient_code')->on(new Expression($db . '.locations'));
            // // $table->foreign('drug_name')->references('drug_name')->on(new Expression($db . '.locations'));
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
        Schema::dropIfExists('drug_orders');
    }
}
