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
        //
        Schema::create('watch_imgs', function (Blueprint $table){
            $table->id();
            $table->string('img');
            $table->unsignedBigInteger('watch_id');
            $table->foreign('watch_id')
                ->references('id')
                ->on('watches')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
