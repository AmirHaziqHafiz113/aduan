<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('User_ID', true);
            $table->integer('Role_ID')->index('Role_ID');
            $table->integer('Head_Dept_ID');
            $table->string('U_Name', 100);
            $table->string('U_email', 100);
            $table->string('U_Password', 50);
            $table->string('U_Dept', 100);
            $table->timestamp('Timestamp')->useCurrentOnUpdate()->useCurrent();
            $table->string('Add_By', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
