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
        Schema::create('request_a_quotes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('vehicle_type');
            $table->string('city_of_departure');
            $table->string('departure_time');
            $table->string('type_of_goods');
            $table->decimal('weight_of_shipment', 8, 2);
            $table->string('delivery_type');
            $table->string('route_type')->nullable();
            $table->string('stateroute')->nullable();
            $table->decimal('total_cost', 8, 2)->nullable();
            $table->string('tracking_number')->nullable();
            $table->date('date_of_shipment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_a_quotes');
    }
};
