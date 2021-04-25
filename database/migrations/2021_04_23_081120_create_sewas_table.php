<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSewasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewas', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('NIK', 16);
            $table->string('email')->nullable();
            $table->string('tlp',15);

            $table->integer('no_unit');
            $table->decimal('harga',10,2);
            $table->date('dari');
            $table->date('sampai');

            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sewas');
    }
}
