<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MuncityResource extends JsonResource
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
            'muncity_id' => $this->muncity_id,
            'province' => new ProvinceResource($this->province),
            'district' => $this->district,
            'code' => $this->code,
            'description' => $this->description
        ];
    }
}
