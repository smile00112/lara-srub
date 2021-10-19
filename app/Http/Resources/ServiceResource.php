<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
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
            "id" => $this->id,
            "title" => $this->title,
            "seo_title" => $this->seo_title,
            "seo_h1" => $this->seo_h1,
            "seo_description" => $this->seo_description,
            "description" => $this->description,
            "type" => $this->type,
            //"created_at" => $this->created_at,
        ];
        //return parent::toArray($request);
    }
}
