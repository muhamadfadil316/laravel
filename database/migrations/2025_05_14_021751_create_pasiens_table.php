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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('kode',10)->unique();
            $table->string('nama',50)->required();
            $table->string('tmp_lahir',50);
            $table->date('tgl_lahir');
            $table->enum('gender',['L', 'P']);
            $table->string('email',50);
            $table->string('alamat',100);
            $table->bigInteger('kelurahan_id')->unsigned();
            $table->index('kelurahan_id');
            $table->foreign('kelurahan_id')->references('id')->on('kelurahans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
