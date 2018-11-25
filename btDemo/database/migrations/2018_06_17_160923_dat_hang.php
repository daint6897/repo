<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datHang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idNguoiBan')->nullable();
            $table->integer('idUser')->nullable();
            $table->integer('idSanPham')->nullable();
            $table->string('tenUser')->nullable();
            $table->string('diaChi')->nullable();
            $table->string('soDienThoai')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
