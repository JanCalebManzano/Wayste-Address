<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BarangayResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'barangay_id' => $this->barangay_id,
            'muncity' => new MuncityResource($this->muncity),
            'code' => $this->code,
            'description' => $this->description
        ];
    }
}
