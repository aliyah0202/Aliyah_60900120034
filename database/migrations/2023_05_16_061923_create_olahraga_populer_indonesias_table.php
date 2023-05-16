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
        Schema::create('olahraga_populer_indonesias', function (Blueprint $table) {
           
            $table->uuid('id')->primary;
            $table->string('nama_olahraga');
            $table->string('desk_singkat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('olahraga_populer_indonesias');
    }
};
