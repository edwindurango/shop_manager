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
        Schema::create('checkout_activities', function (Blueprint $table) {
            $table->id();

            $table->foreignId('checkout_id')->nullable()->constrained('checkouts');
            $table->integer('type')->default(0);
            $table->decimal('value', 10,2)->default(0);
            $table->string('motive')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkout_activities');
    }
};
