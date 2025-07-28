<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home()
    {
        return view('home'); // resources/views/home.blade.php
    }

    public function about()
    {
        return view('about'); // resources/views/about.blade.php
    }

    public function conference()
    {
        return view('conference'); // resources/views/conference.blade.php
    }

    public function exhibition()
    {
        return view('exhibition'); // resources/views/exhibition.blade.php
    }

    public function businessmatching()
    {
        return view('businessmatching'); // resources/views/businessmatching.blade.php
    }

    /**
     * Display the interactive booth map.
     *
     * This method generates a dynamic list of sample booth data, including
     * booth numbers, names, descriptions, and random positioning.
     * In a production application, this data would typically be fetched
     * from a database or a dedicated service.
     *
     * @return \Illuminate\Contracts\View\View The 'booth-map' view with booth data.
     */
    public function booth()
    {
        // Initialize an empty array to store booth data.
        $booths = [];

        // Loop to generate 30 sample booths.
        for ($i = 1; $i <= 30; $i++) {
            // Populate booth details for each iteration.
            $booths[] = [
                'number' => $i, // Unique booth number
                'name' => "Booth $i", // Generic booth name
                'description' => "Deskripsi booth $i", // Placeholder description
                'top' => rand(5, 90),  // Random vertical position (percentage from top)
                'left' => rand(5, 90), // Random horizontal position (percentage from left)
            ];
        }

        // Return the 'booth-map' view, passing the generated 'booths' array to it.
        return view('booth-map', compact('booths'));
    }
}
