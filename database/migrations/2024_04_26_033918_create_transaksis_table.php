<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('invoice')->unique();
            $table->bigInteger('id_pelanggan')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->double('total');
            $table->timestamps();
        });

Schema::table('transaksis',function(Blueprint $table){
            $table->foreign('id_pelanggan')->references('id')->on('pelanggans')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('transaksis', function(Blueprint $table) {
            $table->dropForeign('transaksis_pelanggan_id_foreign');
        });

        Schema::table('transaksis', function(Blueprint $table) {
            $table->dropIndex('transaksis_pelanggan_id_foreign');
        });

        Schema::table('transaksis', function(Blueprint $table) {
            $table->dropForeign('transaksis_user_id_foreign');
        });

        Schema::table('transaksis', function(Blueprint $table) {
            $table->dropIndex('transaksis_user_id_foreign');
        });
              
        Schema::dropIfExists('transaksis');
    }

};
