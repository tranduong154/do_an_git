<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatsanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_san', function (Blueprint $table) {
            $table->id();
            $table->integer('ma_tk');
            $table->date('ngay_dat');
            $table->string('ten_nguoi_dat');
            $table->string('sdt_nguoi_dat');
            $table->float('so_tien_thanh_toan');
            $table->integer('ma_trang_thai');
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
        Schema::dropIfExists('dat_san');
    }
}
