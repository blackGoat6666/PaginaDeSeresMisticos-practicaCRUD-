<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\TipoDragon;
use App\Enums\ColorDragon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dragon', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tipo');
            $table->string('color');
            $table->string('nombre');
            $table->string('foto');
            $table->boolean('alas');
            $table->decimal('peso', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dragon');
    }
};
