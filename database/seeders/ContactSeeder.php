<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contacts;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'name' => 'nwokeohuru',
                'email' => 'chijindu.nwokeohuru@gmail.com',
                'phone' => '07065910449',
                'subject' => 'Production test',
                'message' => 'testing the contact message on the live production server.',
            ],
            [
                'name' => 'Chijindu Ceejay',
                'email' => 'faith@gmail.com',
                'phone' => '07065910449',
                'subject' => 'Hello from Ceejay testing toastr alert',
                'message' => 'just testing the Toastr Alert feature right now.', 
            ],
            [
                'name' => 'Obinna Onwukwe',
                'email' => 'obinna@gmail.com',
                'phone' => '07065910449',
                'subject' => ' Hello from obinna',
                'message' => 'hi, what does UACF do?.',
            ],
            [
                'name' => 'Tosan',
                'email' => 'tosan@gmail.com',
                'phone' => '07065910449',
                'subject' => 'Request for information',
                'message' => 'Can you provide more details on your uacf?',
            ],
            [
                'name' => 'Chibuike',
                'email' => 'chijindu.nwokeohuru.com',
                'phone' => '07065910449',
                'subject' => 'test',
                'message' => 'I would like to apply for a job at uacf.',
            ],
            [
                'name' => 'Chibuike',
                'email' => 'chijindu.nwokeohuru.com',
                'phone' => '07065910449',
                'subject' => 'test',
                'message' => 'this is a test email message',
            ],
        ];

        foreach ($contacts as $contact) {
            Contacts::create($contact);
        }
    }
}
