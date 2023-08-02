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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            
            $table->date("date_time")
                ->comment("Ngày_giờ");

            $table->string("usr_name")
                ->comment("Tên người dùng");

            $table->string("addr")
                ->comment("Địa chỉ");

            $table->string("phone")
                ->comment('SĐT');

            $table->string("email");

            $table->unsignedFloat("total_money")
                ->comment("Tổng tiền");

            $table->bigInteger("id_status")
                ->index("idx_order_id_status")
                ->comment("Trạng thái");

            $table->bigInteger("id_users")
                ->index("idx_order_id_users");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
