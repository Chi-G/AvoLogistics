<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Sliders;


class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [ 
            [
                'title' => 'Empowering Financial Inclusion',
                'description' => 'Our Microfinance Cooperative Society provides digital financial inclusion, savings, and micro-loans for both corporate and individual members.',
                'image' => 'slider_images/slider1.jpg'
            ],
            [
                'title' => 'Boosting Agricultural Productivity',
                'description' => 'Our Agricultural Cooperative Society offers extension services and agribusiness support for micro-farmers, fostering growth and innovation.',
                'image' => 'slider_images/slider2.jpg'
            ],
            [
                'title' => 'Modern Farming with BNO Farms',
                'description' => 'BNO Farms utilizes modern techniques to enhance productivity and sustainability in agriculture.',
                'image' => 'slider_images/slider3.jpg'
            ],
            [
                'title' => 'Skilled Welding and Fabrication',
                'description' => 'Our welding and fabrication services support local industries and create job opportunities.',
                'image' => 'slider_images/slider4.jpg'
            ],
            [
                'title' => 'Empowering Young Girls',
                'description' => 'Our Girls Guide Chapter focuses on leadership training and personal development for young girls.',
                'image' => 'slider_images/slider5.jpg'
            ],
            [
                'title' => 'Digital Literacy for All',
                'description' => 'Our computer labs offer digital literacy programs, equipping community members with essential ICT skills.',
                'image' => 'slider_images/slider6.jpg'
            ],
        ];

        // Insert sample data into the sliders table
        foreach ($sliders as $slider) {
            Sliders::create($slider);
        }
    }
}
