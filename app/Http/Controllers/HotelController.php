<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHotelRequest;
use App\Http\Requests\UpdateHotelRequest;
use App\Models\Hotel;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Gestionnaire;


class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Hotel::all()->load(['gestionnaires']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHotelRequest $request)
    {
        //api store Hotel via data from request
        Hotel::create($request->all());
        return response()->json(['message' => 'Hotel created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        return response()->json($hotel->load(['reservations', 'gestionnaires']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHotelRequest $request, Hotel $hotel)
    {
        //api update Hotel via data from request
        $hotel->update($request->all());
        return response()->json(['message' => 'Hotel updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return response()->json(['message' => 'Hotel deleted successfully']);
    }

    /**
     * get image of hotel
     */
    public function getImage(int $id)
    {
        //get image of hotel and send it to client in base64
        // a image is stored in /public/images/hotels
        $url = file_get_contents(public_path('images/hotels/' . $id . '.jpg'));
        $image = base64_encode($url);
        return response()->json(['image' => $image]);
    }
}
