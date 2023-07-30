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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name')
                ->comment('Tên người dùng');

            $table->string('usr_phone')
                ->comment('SĐT người dùng');

            $table->string('usr_email')
                ->unique()
                ->comment('Email người dùng');

            $table->timestamp('usr_email_verified_at')
                ->nullable()
                ->comment('Thời điểm xác nhận email ng dùng');

            $table->string('password')
                ->comment('Mật khẩu ng dùng');

            $table->rememberToken();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
