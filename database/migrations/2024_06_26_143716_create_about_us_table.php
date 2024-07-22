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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('image1')->nullable();
            $table->string('aboutus_title1')->nullable();
            $table->text('aboutus_desc1')->nullable();
            $table->text('mission_desc')->nullable();
            $table->text('vision_desc')->nullable();
            $table->text('goal_desc')->nullable();
            $table->string('image2')->nullable();
            $table->string('aboutus_title2')->nullable();
            $table->text('aboutus_desc2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('about_us', function (Blueprint $table) {
            $table->dropColumn([
                'image1', 
                'aboutus_title1', 
                'aboutus_desc', 
                'mission_desc', 
                'vision_desc', 
                'goal_desc', 
                'image2', 
                'aboutus_title2', 
                'aboutus_desc2'
            ]);
        });
    }
};
