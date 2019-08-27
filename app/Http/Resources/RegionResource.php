<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'region_id' => $this->region_id,
            'country' => new CountryResource($this->country),
            'code' => $this->code,
            'description' => $this->description
        ];
    }
}
