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
        Schema::dropIfExists('principalities_lords');
        Schema::create('principalities_lords', function (Blueprint $table) {
            $table->foreignId('principality_id')
                ->constrained('principalities')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('lord_id')
                ->constrained('lords')
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
        Schema::dropIfExists('principalities_lords');
    }
};
