<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietdatsanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_dat_san', function (Blueprint $table) {
            $table->id();
            $table->integer('ma_dat_san');
            $table->integer('ma_san');
            $table->string('khung_gio');
            $table->integer('ma_loai_dv');
            $table->integer('so_luong_dv');
            $table->dateTime('ngay_gio_huy');
            $table->date('ngay_su_dung');
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
        Schema::dropIfExists('chi_tiet_dat_san');
    }
}
