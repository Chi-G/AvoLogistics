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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_title1');
            $table->string('service_title2');
            $table->string('service_title3');
            $table->string('service_title4');
            $table->text('service_desc1');
            $table->text('service_desc2');
            $table->text('service_desc3');
            $table->text('service_desc4');
            $table->string('offer_bg_title');
            $table->string('offer_title1');
            $table->string('offer_title2');
            $table->string('offer_title3');
            $table->text('offer_desc1');
            $table->text('offer_desc2');
            $table->text('offer_desc3');
            $table->string('image');
            $table->text('service_details_title');
            $table->text('service_details_bg_desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
