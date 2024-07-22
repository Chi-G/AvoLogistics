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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('blog_bg_title');
            $table->text('blog_bg_desc');
            $table->string('image_sm');
            $table->string('blog_title');
            $table->text('blog_short_desc');
            $table->string('image_bg');
            $table->text('blog_long_desc1');
            $table->text('blog_long_desc2');
            $table->text('blog_snippet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
