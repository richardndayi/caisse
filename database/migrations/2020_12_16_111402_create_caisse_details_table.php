<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaisseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caisse_details', function (Blueprint $table) {
            $table->id();
            $table->float('encaissement');
            $table->float('decaissement');
            $table->string ('libele');
            $table->datetime('date');

            $table->unsignedBigInteger('compte_id');
            $table->unsignedBigInteger('caisse_id');
            $table->timestamps();

            $table->foreign('compte_id')
            ->references('id') 
            ->on('comptes') 
            ->onDelete('cascade');
           
            $table->foreign('caisse_id') 
            ->references('id') 
            ->on('caisses') 
            ->onDelete('cascade'); 
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caisse_details');
    }
}
