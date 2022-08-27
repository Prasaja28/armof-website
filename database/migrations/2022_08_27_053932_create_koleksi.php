<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKoleksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('koleksi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_koleksi', 100);
            $table->unsignedBigInteger('furniture_id');
            $table->unsignedBigInteger('fungsi_id');
            $table->string('foto');
            $table->boolean('gender');
            $table->string('age_min', 2);
            $table->string('age_max', 2);
            $table->integer('height');
            $table->integer('weight');
            $table->timestamps();
            $table->foreign('furniture_id')
                ->references('id')
                ->on('kategori_furniture')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('fungsi_id')
                ->references('id')
                ->on('kategori_fungsi')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('koleksi');
    }
}
