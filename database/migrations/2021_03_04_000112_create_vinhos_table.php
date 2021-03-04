<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vinhos', function (Blueprint $table) {
            $table->id();

            $table->string('marca');
            $table->string('nacionalidade');
            $table->string('vinhedo');
            
            $table->float('preco_venda');
            $table->float('preco_compra');
            $table->float('nota_degustacao');
            $table->float('teor_alcoolico');

            $table->integer('ano');

            $table->UnsignedBigInteger('user_id');
            $table->UnsignedBigInteger('armario_id');


            $table->foreign('user_id')
            ->references('id')
            ->on('users');

            $table->foreign('armario_id')
            ->references('id')
            ->on('armarios');


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
        Schema::dropIfExists('vinhos');
    }
}
