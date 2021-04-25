<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UseridInSewa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sewas', function (Blueprint $table) {
            //
            $table->integer('user_id');
            $table->integer('update_user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sewas', function (Blueprint $table) {
            //
            $table->dropColumn('user_id');
            $table->dropColumn('update_user_id');
        });
    }
}

