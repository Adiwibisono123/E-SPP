<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXOTKPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('x_o_t_k_p_s', function (Blueprint $table) {
            $table->id();
            $table->string('NIS')->nullable();
            $table->string('nama')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('status_pembayaran')->nullable();
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
        Schema::dropIfExists('x_o_t_k_p_s');
    }
}
