<?php

namespace App\Http\Controllers;

use App\Country;
use App\Region;
use App\Http\Resources\RegionResource;
use App\Http\Resources\RegionResourceCollection;
use Illuminate\Http\Request;

class RegionController extends Controller
{

    /**
     * Display a listing of the `regions`.
     *
     * @param Country $country
     * @return RegionResourceCollection
     */
    public function index(Country $country): RegionResourceCollection
    {
        $regions = Region::where('country_id', $country->country_id)
                    ->get();
        return new RegionResourceCollection($regions);
    }

    /**
     * Display the specified `region`.
     *
     * @param Country $country
     * @param Region $region
     * @return RegionResource
     */
    public function show(Country $country, Region $region): RegionResource
    {
        $region = Region::where('country_id', $country->country_id)
                    ->where('region_id', $region->region_id)
                    ->first();
        return new RegionResource($region);
    }

}
