<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Inertia\Inertia;
use Inertia\Response;

class ListingController extends Controller
{
    public function index(): Response
    {
        $listing = Listing::first();
        return Inertia::render("Listing", [
            "title" => $listing->title,
            "description" => $listing->description,
            "image_url" => $listing->image_url,
        ]);
    }
}
