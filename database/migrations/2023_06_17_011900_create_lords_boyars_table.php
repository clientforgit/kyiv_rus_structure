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
        Schema::dropIfExists('lords_boyars');
        Schema::create('lords_boyars', function (Blueprint $table) {
            $table->foreignId('lord_id')
                ->constrained('lords')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('boyar_id')
                ->constrained('boyars')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lords_boyars');
    }
};
