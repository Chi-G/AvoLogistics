<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about_us')->insert([
            'image1' => 'path/to/image1.jpg',
            'aboutus_title1' => 'Our Company',
            'aboutus_desc1' => 'We are a leading company in our industry...',
            'mission_desc' => 'Our mission is to provide the best services...',
            'vision_desc' => 'Our vision is to be the market leader...',
            'goal_desc' => 'Our goal is to achieve excellence...',
            'image2' => 'path/to/image2.jpg',
            'aboutus_title2' => 'Our Team',
            'aboutus_desc2' => 'We have a dedicated team...',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
