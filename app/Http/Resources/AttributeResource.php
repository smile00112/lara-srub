<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AttributeResource extends JsonResource
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
            //"id" => $this->id,
            "name" => $this->name,
            "value" => $this->attribute_value->value
        ];
        //return parent::toArray($request);
    }
}
