<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'blog_bg_title' => 'Blog Background Title 1',
                'blog_bg_desc' => 'This is the background description for Blog 1',
                'image_sm' => 'image_sm1.jpg',
                'blog_title' => 'Blog Title 1',
                'blog_short_desc' => 'This is a short description for Blog 1',
                'image_bg' => 'image_bg1.jpg',
                'blog_long_desc1' => 'This is the long description 1 for Blog 1',
                'blog_long_desc2' => 'This is the long description 2 for Blog 1',
                'blog_snippet' => 'Snippet for Blog 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_bg_title' => 'Blog Background Title 2',
                'blog_bg_desc' => 'This is the background description for Blog 2',
                'image_sm' => 'image_sm2.jpg',
                'blog_title' => 'Blog Title 2',
                'blog_short_desc' => 'This is a short description for Blog 2',
                'image_bg' => 'image_bg2.jpg',
                'blog_long_desc1' => 'This is the long description 1 for Blog 2',
                'blog_long_desc2' => 'This is the long description 2 for Blog 2',
                'blog_snippet' => 'Snippet for Blog 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_bg_title' => 'Blog Background Title 3',
                'blog_bg_desc' => 'This is the background description for Blog 3',
                'image_sm' => 'image_sm3.jpg',
                'blog_title' => 'Blog Title 3',
                'blog_short_desc' => 'This is a short description for Blog 3',
                'image_bg' => 'image_bg3.jpg',
                'blog_long_desc1' => 'This is the long description 1 for Blog 3',
                'blog_long_desc2' => 'This is the long description 2 for Blog 3',
                'blog_snippet' => 'Snippet for Blog 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_bg_title' => 'Blog Background Title 4',
                'blog_bg_desc' => 'This is the background description for Blog 4',
                'image_sm' => 'image_sm4.jpg',
                'blog_title' => 'Blog Title 4',
                'blog_short_desc' => 'This is a short description for Blog 4',
                'image_bg' => 'image_bg4.jpg',
                'blog_long_desc1' => 'This is the long description 1 for Blog 4',
                'blog_long_desc2' => 'This is the long description 2 for Blog 4',
                'blog_snippet' => 'Snippet for Blog 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_bg_title' => 'Blog Background Title 5',
                'blog_bg_desc' => 'This is the background description for Blog 5',
                'image_sm' => 'image_sm5.jpg',
                'blog_title' => 'Blog Title 5',
                'blog_short_desc' => 'This is a short description for Blog 5',
                'image_bg' => 'image_bg5.jpg',
                'blog_long_desc1' => 'This is the long description 1 for Blog 5',
                'blog_long_desc2' => 'This is the long description 2 for Blog 5',
                'blog_snippet' => 'Snippet for Blog 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'blog_bg_title' => 'Blog Background Title 6',
                'blog_bg_desc' => 'This is the background description for Blog 6',
                'image_sm' => 'image_sm6.jpg',
                'blog_title' => 'Blog Title 6',
                'blog_short_desc' => 'This is a short description for Blog 6',
                'image_bg' => 'image_bg6.jpg',
                'blog_long_desc1' => 'This is the long description 1 for Blog 6',
                'blog_long_desc2' => 'This is the long description 2 for Blog 6',
                'blog_snippet' => 'Snippet for Blog 6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
