<?php

namespace App\Http\Controllers;

use App\Country;
use App\Region;
use App\Province;
use App\Http\Resources\ProvinceResource;
use App\Http\Resources\ProvinceResourceCollection;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{

    /**
     * Display a listing of the `provinces`.
     *
     * @param Region $region
     * @return ProvinceResourceCollection
     */
    public function index(Country $country, Region $region): ProvinceResourceCollection
    {
        $provinces = Province::where('region_id', $region->region_id)
                        ->get();
        return new ProvinceResourceCollection($provinces);
    }

    /**
     * Display the specified `province`.
     *
     * @param Region $region
     * @param Province $province
     * @return ProvinceResource
     */
    public function show(Country $country, Region $region, Province $province): ProvinceResource
    {
        $province = Province::where('region_id', $region->region_id)
                    ->where('province_id', $province->province_id)
                    ->first();
        return new ProvinceResource($province);
    }

}
