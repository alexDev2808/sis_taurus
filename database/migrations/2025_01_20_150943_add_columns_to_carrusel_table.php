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
        Schema::table('carrusel', function (Blueprint $table) {
            $table->string('nombre');
            $table->string('desc');
            $table->integer('tiempo')->default(10);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carrusel', function (Blueprint $table) {
            $table->dropColumn('nombre');
            $table->dropColumn('desc');
            $table->dropColumn('tiempo');
        });
    }
};
