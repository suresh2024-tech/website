<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = [
            [
                'icon' => 'flaticon-frame',
                'title' => 'Portrait',
                'description' => 'Our portrait photography delivers stunning, personalized photos for individuals, families, or professionals.',
                'price' => 9000
            ],
            [
                'icon' => 'flaticon-picture',
                'title' => 'Wedding Photography',
                'description' => 'Let us capture the beauty and emotions of your wedding day with timeless photographs.',
                'price' => 6000
            ],
            [
                'icon' => 'flaticon-sheep',
                'title' => 'Animal',
                'description' => 'We specialize in capturing the charm and personality of pets and wildlife in every shot.',
                'price' => 8000
            ],
            [
                'icon' => 'flaticon-eiffel-tower',
                'title' => 'Travel',
                'description' => 'We document your journeys with captivating photos of landscapes, cultures, and unforgettable moments.',
                'price' => 12000
            ],
            [
                'icon' => 'flaticon-camera',
                'title' => 'Camera',
                'description' => 'We provide expert camera services to capture sharp, high-quality images and videos.',
                'price' => 5000
            ],
            [
                'icon' => 'flaticon-video-play',
                'title' => 'Video Editing',
                'description' => 'We transform your raw footage into sleek, professional videos with expert editing.',
                'price' => 16000
            ],
        ];

        return view('frontend.services', compact('services'));
    }
}