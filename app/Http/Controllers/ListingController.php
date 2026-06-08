<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Validator;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('Listing/Index',
        [
            'listings' => Listing::all()
        ]);   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Listing/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Method 1
        // $valid = Validator::make($request->all(), [
        //     'beds' => 'required',
        //     'baths' => 'required',
        //     'area' => 'required',
        //     'city' => 'required',
        //     'street' => 'required',
        //     'code' => 'required',
        //     'street_nr' => 'required',
        //     'price' => 'required',
        // ]);

        // if($valid->fails()){
        //     return inertia('Listing/Create', [
        //         'errors' => $valid->errors()
        //     ]);
        // }

        // Listing::create($request->all());

        //Method 2

        $listing = new Listing();

        $listing->beds = $request->beds;
        $listing->baths = $request->baths;
        $listing->area = $request->area;
        $listing->city = $request->city;
        $listing->street = $request->street;
        $listing->code = $request->code;
        $listing->street_nr = $request->street_nr;
        $listing->price = $request->price;

        $listing->save();

        return redirect()->route('listing.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        return inertia('Listing/Show',
        [
            'listing' => $listing
        ]);   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}