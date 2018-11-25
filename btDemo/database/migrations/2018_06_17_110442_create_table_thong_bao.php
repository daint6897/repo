<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableThongBao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noiDung', function (Blueprint $table) {
            $table->increments('id');
            $table->string('noiDung');
            $table->integer('idNguoiBan')->nullable();
            $table->integer('idAdmin')->nullable();
            $table->integer('idUser')->nullable();
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
