<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('fcode');
            $table->string('name');
            $table->integer('type')->unsigned();
            // $table->foreign('type')->refrences('id')->on('invoicetype');
            $table->DateTime('vdate');
            $table->integer('partyid');
            $table->string('partyname');
            $table->integer('agentid');
            $table->integer('sno');
            $table->integer('pid');
            $table->string('pname');
            $table->double('qty');
            $table->double('rate');
            $table->double('amount');
            $table->double('discount');
            $table->double('netamount');
            $table->DateTime('addedon');
            $table->string('addedby');
        });

      //   Schema::table('invoice', function($table) {
      //   $table->foreign('type')->refrences('id')->on('invoicetype');
      // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
