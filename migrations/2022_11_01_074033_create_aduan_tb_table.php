<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAduanTbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aduan_tb', function (Blueprint $table) {
            $table->integer('Aduan_ID', true);
            $table->integer('Category_ID')->nullable();
            $table->integer('Status_ID')->nullable()->index('Status_ID');
            $table->string('Nama_Pengadu', 100);
            $table->integer('No_Tel');
            $table->string('Email', 100);
            $table->string('Aduan_Info', 1000);
            $table->timestamp('Timestamp_New')->useCurrentOnUpdate()->nullable()->useCurrent();
            $table->dateTime('Timestamp_Pending')->nullable();
            $table->dateTime('Timestamp_In_Progress')->nullable();
            $table->dateTime('Timestamp_Closed')->nullable();
            $table->dateTime('Timestamp_Amend')->nullable();

            $table->index(['Category_ID', 'Status_ID'], 'Category_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aduan_tb');
    }
}
