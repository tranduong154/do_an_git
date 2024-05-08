<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiatheokhunggioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gia_theo_khung_gio', function (Blueprint $table) {
            $table->id();
            $table->integer('ma_loai_san');
            $table->string('khung_gio');
            $table->string('thu');
            $table->float('gia_tien');
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
        Schema::dropIfExists('gia_theo_khung_gio');
    }
}
