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
        Schema::create('foreign_pelanggan', function (Blueprint $table) {
            $table->foreing('pel_id_gol')->reference(id)->on('tb_golongan')->onDelete('restrict');
            $table->foreing('pel_id_user')->reference(id)->on('tb_pengguna')->onDelete('restrict');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropForeing('pel_id_gol');
        Schema::dropForeing('pel_id_user');

    }
};
