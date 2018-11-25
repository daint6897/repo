<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyPer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('role_permissions', function (Blueprint $table) {
            $table->foreign('permission_id')
                  ->references('id')->on('permissions')
                  ->onDelete('cascade');
            $table->primary(['role_id','permission_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('role_permissions', function (Blueprint $table) {
            //
        });
    }
}
