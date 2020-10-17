<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Menus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kategori');
            $table->string('tarifadi');
            $table->string('kackisi');
            $table->string('malzemeler');
            $table->string('hazirlanisi');
            $table->timestamps();
            $table->softDeletes(); //MUTLAKA ekleyiniz

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
