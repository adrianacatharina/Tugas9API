<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('hewans', function (Blueprint $table) {
            $table->string('code', 11)->unique();
            $table->string('name', 100);
            $table->string('description', 255);
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps  ();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hewans');
    }
};
