<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('centals', function (Blueprint $table) {
            $table->id();

            $table->string("centals_name")
                ->nullable()
                ->comment("Tên đơn vị trọng lượng");

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('centals');
    }
};
