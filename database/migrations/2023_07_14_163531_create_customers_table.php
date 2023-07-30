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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();

            $table->string("cust_name")
                ->comment("Tên khách hàng");

            $table->string("cust_phone")
                ->comment("SĐT khách hàng");

            $table->string("cust_email")
                ->unique()
                ->comment("Email KH");

            $table->timestamp("cust_email_verified_at")
                ->nullable()
                ->comment("Thời điểm xác nhận Email KH");

            $table->string("cust_password")
                ->comment("Mật khẩu KH");

            $table->rememberToken();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
