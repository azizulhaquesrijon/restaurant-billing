<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('sells', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('bill_no');
          $table->string('table_no');
          $table->unsignedBigInteger('waiter_id');
          $table->string('customer');
          $table->string('customer_adress');
          $table->string('date');
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
        Schema::dropIfExists('sells');
    }
}
