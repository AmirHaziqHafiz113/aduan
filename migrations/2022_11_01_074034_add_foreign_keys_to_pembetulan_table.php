<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPembetulanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pembetulan', function (Blueprint $table) {
            $table->foreign(['Aduan_ID'], 'pembetulan_ibfk_1')->references(['Aduan_ID'])->on('aduan_tb')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['User_ID'], 'pembetulan_ibfk_2')->references(['User_ID'])->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pembetulan', function (Blueprint $table) {
            $table->dropForeign('pembetulan_ibfk_1');
            $table->dropForeign('pembetulan_ibfk_2');
        });
    }
}
