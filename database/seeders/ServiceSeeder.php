<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'service_title1' => 'Service Title 1A',
                'service_title2' => 'Service Title 1B',
                'service_title3' => 'Service Title 1C',
                'service_title4' => 'Service Title 1D',
                'service_desc1' => 'Description for Service Title 1A',
                'service_desc2' => 'Description for Service Title 1B',
                'service_desc3' => 'Description for Service Title 1C',
                'service_desc4' => 'Description for Service Title 1D',
                'offer_bg_title' => 'Background Title for Offers 1',
                'offer_title1' => 'Offer Title 1A',
                'offer_title2' => 'Offer Title 1B',
                'offer_title3' => 'Offer Title 1C',
                'offer_desc1' => 'Description for Offer Title 1A',
                'offer_desc2' => 'Description for Offer Title 1B',
                'offer_desc3' => 'Description for Offer Title 1C',
                'image' => 'image1.jpg',
                'service_details_title' => 'Service Details Title 1',
                'service_details_bg_desc' => 'Service Details Background Description 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_title1' => 'Service Title 2A',
                'service_title2' => 'Service Title 2B',
                'service_title3' => 'Service Title 2C',
                'service_title4' => 'Service Title 2D',
                'service_desc1' => 'Description for Service Title 2A',
                'service_desc2' => 'Description for Service Title 2B',
                'service_desc3' => 'Description for Service Title 2C',
                'service_desc4' => 'Description for Service Title 2D',
                'offer_bg_title' => 'Background Title for Offers 2',
                'offer_title1' => 'Offer Title 2A',
                'offer_title2' => 'Offer Title 2B',
                'offer_title3' => 'Offer Title 2C',
                'offer_desc1' => 'Description for Offer Title 2A',
                'offer_desc2' => 'Description for Offer Title 2B',
                'offer_desc3' => 'Description for Offer Title 2C',
                'image' => 'image2.jpg',
                'service_details_title' => 'Service Details Title 2',
                'service_details_bg_desc' => 'Service Details Background Description 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_title1' => 'Service Title 3A',
                'service_title2' => 'Service Title 3B',
                'service_title3' => 'Service Title 3C',
                'service_title4' => 'Service Title 3D',
                'service_desc1' => 'Description for Service Title 3A',
                'service_desc2' => 'Description for Service Title 3B',
                'service_desc3' => 'Description for Service Title 3C',
                'service_desc4' => 'Description for Service Title 3D',
                'offer_bg_title' => 'Background Title for Offers 3',
                'offer_title1' => 'Offer Title 3A',
                'offer_title2' => 'Offer Title 3B',
                'offer_title3' => 'Offer Title 3C',
                'offer_desc1' => 'Description for Offer Title 3A',
                'offer_desc2' => 'Description for Offer Title 3B',
                'offer_desc3' => 'Description for Offer Title 3C',
                'image' => 'image3.jpg',
                'service_details_title' => 'Service Details Title 3',
                'service_details_bg_desc' => 'Service Details Background Description 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_title1' => 'Service Title 4A',
                'service_title2' => 'Service Title 4B',
                'service_title3' => 'Service Title 4C',
                'service_title4' => 'Service Title 4D',
                'service_desc1' => 'Description for Service Title 4A',
                'service_desc2' => 'Description for Service Title 4B',
                'service_desc3' => 'Description for Service Title 4C',
                'service_desc4' => 'Description for Service Title 4D',
                'offer_bg_title' => 'Background Title for Offers 4',
                'offer_title1' => 'Offer Title 4A',
                'offer_title2' => 'Offer Title 4B',
                'offer_title3' => 'Offer Title 4C',
                'offer_desc1' => 'Description for Offer Title 4A',
                'offer_desc2' => 'Description for Offer Title 4B',
                'offer_desc3' => 'Description for Offer Title 4C',
                'image' => 'image4.jpg',
                'service_details_title' => 'Service Details Title 4',
                'service_details_bg_desc' => 'Service Details Background Description 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_title1' => 'Service Title 5A',
                'service_title2' => 'Service Title 5B',
                'service_title3' => 'Service Title 5C',
                'service_title4' => 'Service Title 5D',
                'service_desc1' => 'Description for Service Title 5A',
                'service_desc2' => 'Description for Service Title 5B',
                'service_desc3' => 'Description for Service Title 5C',
                'service_desc4' => 'Description for Service Title 5D',
                'offer_bg_title' => 'Background Title for Offers 5',
                'offer_title1' => 'Offer Title 5A',
                'offer_title2' => 'Offer Title 5B',
                'offer_title3' => 'Offer Title 5C',
                'offer_desc1' => 'Description for Offer Title 5A',
                'offer_desc2' => 'Description for Offer Title 5B',
                'offer_desc3' => 'Description for Offer Title 5C',
                'image' => 'image5.jpg',
                'service_details_title' => 'Service Details Title 5',
                'service_details_bg_desc' => 'Service Details Background Description 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'service_title1' => 'Service Title 6A',
                'service_title2' => 'Service Title 6B',
                'service_title3' => 'Service Title 6C',
                'service_title4' => 'Service Title 6D',
                'service_desc1' => 'Description for Service Title 6A',
                'service_desc2' => 'Description for Service Title 6B',
                'service_desc3' => 'Description for Service Title 6C',
                'service_desc4' => 'Description for Service Title 6D',
                'offer_bg_title' => 'Background Title for Offers 6',
                'offer_title1' => 'Offer Title 6A',
                'offer_title2' => 'Offer Title 6B',
                'offer_title3' => 'Offer Title 6C',
                'offer_desc1' => 'Description for Offer Title 6A',
                'offer_desc2' => 'Description for Offer Title 6B',
                'offer_desc3' => 'Description for Offer Title 6C',
                'image' => 'image6.jpg',
                'service_details_title' => 'Service Details Title 6',
                'service_details_bg_desc' => 'Service Details Background Description 6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
