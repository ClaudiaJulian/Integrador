<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->string('marca',100);
            $table->decimal('precio',7,2);
            $table->integer('tipo_id');
            $table->integer('qVentas');
            $table->string('photo')->default('/img_default/img_produc.jpg');
            $table->integer('stock');
            $table->integer('oferta')->nullable();
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
        Schema::dropIfExists('productos');
    }
}
