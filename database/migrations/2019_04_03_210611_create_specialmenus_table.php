<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialmenus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pictures',200);
            $table->char('PlatterName');
            $table->string('item_1');
            $table->float('price_1',10,2);
            $table->string('item_2')->nullable();
            $table->float('price_2',10,2);
            $table->string('item_3')->nullable();
            $table->float('price_3',10,2);
            $table->string('item_4')->nullable();
            $table->float('price_4',10,2);
            $table->string('item_5')->nullable();
            $table->float('price_5',10,2);
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
        Schema::dropIfExists('specialmenus');
    }
}
