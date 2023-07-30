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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();

            $table->string("name")
                ->comment("Tên quản trị viên");

            $table->string("ad_phone")
                ->comment("SĐT quản trị viên");

            $table->string("ad_email")
                ->unique()
                ->comment("Email QTV");

            $table->timestamp("ad_email_verified_at")
                ->nullable()
                ->comment("Thời điểm xác nhận Email QTV");

            $table->string("password")
                ->comment("Mật khẩu QTV");

            $table->rememberToken();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
