<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $team = [
            [
                'name' => 'Parnab Balaya',
                'image' => 'images/Pranab.jpg',
                'description' => 'Pranab is an exceptional cameraman who truly excels in his craft. His keen eye for detail, creativity, and dedication set him apart, making each shot he captures a masterpiece.',
                'twitter' => '#',
                'instagram' => '#',
                'facebook' => '#',
            ],
            [
                'name' => 'Jr.Marshall',
                'image' => 'images/Jr.Marshall.jpg', 
                'description' => '
                 Jr Marshall brings a wealth of artistic expertise and a unique vision to the team. His ability to craft visually compelling stories ensures each project reflects the individuality of our clients.',
                'twitter' => '#',
                'instagram' => '#',
                'facebook' => '#',
            ],
            [
                'name' => 'Janardan DC',
                'image' => 'images/JanardanDC.jpg',
                'description' => 'Janardan is the editor of our team, handling the editing of videos, photos, and other media with precision and creativity. His skills ensure that every project is polished and meets the highest standards.',
                'twitter' => '#',
                'instagram' => '#',
                'facebook' => '#',
            ],
        ];

        return view('frontend.about', compact('team'));
    }
}