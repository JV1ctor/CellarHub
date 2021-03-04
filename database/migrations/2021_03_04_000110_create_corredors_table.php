<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorredorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corredors', function (Blueprint $table) {
            $table->id();

            $table->string('nomenclatura');

            $table->UnsignedBigInteger('porao_id');

            $table->foreign('porao_id')
                ->references('id')
                ->on('poraos');


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
        Schema::dropIfExists('corredors');
    }
}
