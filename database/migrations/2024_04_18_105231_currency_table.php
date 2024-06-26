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
        Schema::create(
            'currencySaver',
            function (Blueprint $table) {
                $table->id();
                $table->string('code');
                $table->string('type');
                $table->integer('buying');
                $table->integer('selling');
                $table->integer('change');
                $table->timestamp('updatetime');
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencySaver');
    }
};
