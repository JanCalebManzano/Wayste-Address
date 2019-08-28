<?php

namespace App\Http\Controllers;

use App\Country;
use App\Region;
use App\Province;
use App\Muncity;
use App\Http\Resources\MuncityResource;
use App\Http\Resources\MuncityResourceCollection;
use Illuminate\Http\Request;

class MuncityController extends Controller
{

    /**
     * Display a listing of the `muncities`.
     *
     * @param Country $country
     * @param Region $region
     * @param Province $province
     * @return MuncityResourceCollection
     */
    public function index(Country $country, Region $region, Province $province): MuncityResourceCollection
    {
        $muncities = Muncity::where('province_id', $province->province_id)
                        ->get();
        return new MuncityResourceCollection($muncities);
    }

    /**
     * Display the specified `muncity`.
     *
     * @param Country $country
     * @param Region $region
     * @param Province $province
     * @param Muncity $muncity
     * @return MuncityResource
     */
    public function show(Country $country, Region $region, Province $province, Muncity $muncity): MuncityResource
    {
        $muncity = Muncity::where('province_id', $province->province_id)
                    ->where('muncity_id', $muncity->muncity_id)
                    ->first();
        return new MuncityResource($muncity);
    }

}
