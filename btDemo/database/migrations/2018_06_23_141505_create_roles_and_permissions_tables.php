<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesAndPermissionsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//roles
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
        });
//permistion
        Schema::create('permisstions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('role_permisstion', function (Blueprint $table) {
            $table->unsignedInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('CASCADE');
            $table->unsignedInteger('permisstion_id');
            $table->foreign('permisstion_id')->references('id')->on('permisstions')->onDelete('CASCADE');
            $table->timestamps();
            $table->primary(['role_id','permisstion_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('roles');
        schema::dropIfExists('permisstions');
    }
}
