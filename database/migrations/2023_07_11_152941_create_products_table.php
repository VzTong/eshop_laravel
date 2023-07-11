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
        Schema::create('products', function (Blueprint $table) {

            $table->id();

            $table->string("prd_code", 5)
                ->comment("Mã sản phẩm");

            $table->string("prd_names", 200)
                ->nullable()
                ->comment("Tên sản phẩm");

            $table->unsignedInteger("prd_heft")
                ->default("0")
                ->nullable()
                ->comment("Trọng lượng sản phẩm");

            $table->bigInteger("id_cental")
                ->index("idx_products_id_cental")
                ->comment("ID Đơn vị trọng lượng sp");

            $table->unsignedFloat("prd_original_price")
                ->default("0")
                ->nullable()
                ->comment("Giá gốc sp");

            $table->unsignedFloat("prd_selling_price")
                ->default("0")
                ->nullable()
                ->comment("Giá bán sp");

            $table->longText("prd_details")
                ->nullable()
                ->comment("Thông tin chi tiết sp");

            $table->string("prd_cover")
                ->nullable()
                ->comment("Ảnh sp");

            $table->unique(["prd_names"]);

            $table->foreign('prd_code')
                ->references('ctg_code')->on('categories')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
