<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembetulanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembetulan', function (Blueprint $table) {
            $table->integer('Correction_ID', true);
            $table->integer('Aduan_ID')->index('Aduan_ID');
            $table->integer('User_ID')->index('User_ID');
            $table->string('Description', 1000);
            $table->string('Add_By', 100);
            $table->timestamp('Timestamp')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembetulan');
    }
}
