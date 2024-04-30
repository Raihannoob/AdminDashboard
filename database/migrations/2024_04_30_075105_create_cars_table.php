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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('car_tittle');
            $table->text('description');
            $table->string('car_type');
            $table->string('fuel_type');
            $table->json('pick_up_from')->nullable();
            $table->json('included')->nullable();
            $table->json('not_included')->nullable();
            $table->integer('total_bagage')->nullable();
            $table->integer('total_person')->nullable();
            $table->integer('total_seat_number')->nullable();
            $table->integer('total_view')->nullable();
            $table->float('price_per_day', 10,2);
            $table->float('price_per_week', 10,2);
            $table->float('price_per_month', 10,2);
            $table->text('home_banner_image')->nullable();
            $table->text('tubmbnil_image')->nullable();
            $table->enum('available_now', ['available', 'unavailable'])->default('available');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};