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
        Schema::create('pics', function (Blueprint $table) {
            $table->id();
            $table->string('department_code', 3);
            $table->string('shop_code', 5);
            $table->string('customer_code', 5);
            $table->string('pic_code', 5);
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['shop_code', 'customer_code', 'pic_code']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pics');
    }
};
