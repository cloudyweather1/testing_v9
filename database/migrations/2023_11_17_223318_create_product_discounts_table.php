<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_discounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('discount_id');
            $table->unsignedBigInteger('group_id');
            $table->datetime('discount_start_date')->useCurrent();
            $table->datetime('discount_expiry_date')->default(Carbon::today()->addMonth(1));
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('cascade');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_discounts', function (Blueprint $table) {
            $table->dropForeign('product_discounts_product_id_foreign');
            $table->dropForeign('product_discounts_discount_id_foreign');
            $table->dropForeign('product_discounts_group_id_foreign');
        });

        Schema::dropIfExists('product_discounts');
    }
};
