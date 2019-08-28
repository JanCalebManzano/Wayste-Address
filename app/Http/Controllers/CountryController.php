<?php

namespace App\Http\Controllers;

use App\Country;
use App\Http\Resources\CountryResource;
use App\Http\Resources\CountryResourceCollection;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    /**
     * Display a listing of the `countries`.
     *
     * @return CountryResourceCollection
     */
    public function index(): CountryResourceCollection
    {
        return new CountryResourceCollection(Country::get());
    }

    /**
     * Display the specified `country`.
     *
     * @param Country $country
     * @return CountryResource
     */
    public function show(Country $country): CountryResource
    {
        return new CountryResource($country);
    }

}
