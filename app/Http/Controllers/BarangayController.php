<?php

namespace App\Http\Controllers;

use App\Country;
use App\Region;
use App\Province;
use App\Muncity;
use App\Barangay;
use App\Http\Resources\BarangayResource;
use App\Http\Resources\BarangayResourceCollection;
use Illuminate\Http\Request;

class BarangayController extends Controller
{

    /**
     * Display a listing of the `barangays`.
     *
     * @param Country $country
     * @param Region $region
     * @param Province $province
     * @param Muncity $muncity
     * @return BarangayResourceCollection
     */
    public function index(Country $country, Region $region, Province $province, Muncity $muncity): BarangayResourceCollection
    {
        $barangays = Barangay::where('muncity_id', $muncity->muncity_id)
                        ->get();
        return new BarangayResourceCollection($barangays);
    }

    /**
     * Display the specified `barangay`.
     *
     * @param Country $country
     * @param Region $region
     * @param Province $province
     * @param Muncity $muncity
     * @param Barangay $barangay
     * @return BarangayResource
     */
    public function show(Country $country, Region $region, Province $province, Muncity $muncity, Barangay $barangay): BarangayResource
    {
        $barangay = Barangay::where('muncity_id', $muncity->muncity_id)
                    ->where('barangay_id', $barangay->barangay_id)
                    ->first();
        return new BarangayResource($barangay);
    }

}
