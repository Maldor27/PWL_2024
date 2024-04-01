<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_user', function (Blueprint $table) {
            $table->id('user_id');
            $table->unsignedBigInteger('level_id')->index(); // indexing untuk mempercepat pencarian data
            $table->string('username', 20); // unique untuk memastikan data tidak duplikat
            $table->string('nama', 100);
            $table->string('password', 255);
            $table->timestamps();

            //mendefinisikan foreign key pada kolom level_id yang merujuk ke kolom level_id pada tabel m_level
            $table->foreign('level_id')->references('level_id')->on('m_level');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_user');
    }
};
