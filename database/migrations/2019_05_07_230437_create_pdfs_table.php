<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePdfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdfs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->char('client_name', 20);
            $table->date('date');
            $table->char('address', 100);
            $table->char('office_number', 4);
            $table->char('plz_number', 4);
            $table->integer('price');
            $table->integer('regular_price');
            $table->boolean('bath');
            $table->boolean('park');
            $table->boolean('wifi');
            $table->boolean('dinning_room');
            $table->integer('surface');
            $table->integer('capacity');
            $table->char('agent_name', 20);
            $table->char('agent_email', 20);
            $table->char('agent_phone', 20);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pdfs');
    }
}
