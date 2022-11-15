<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAduanTbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aduan_tb', function (Blueprint $table) {
            $table->foreign(['Category_ID'], 'aduan_tb_ibfk_1')->references(['Category_ID'])->on('category')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['Status_ID'], 'aduan_tb_ibfk_2')->references(['Status_ID'])->on('status')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aduan_tb', function (Blueprint $table) {
            $table->dropForeign('aduan_tb_ibfk_1');
            $table->dropForeign('aduan_tb_ibfk_2');
        });
    }
}
