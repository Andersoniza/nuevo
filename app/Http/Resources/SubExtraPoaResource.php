<?php


namespace App\Http\Resources;


use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class SubExtraPoaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name'=> $this->name,
            'extra_poa_id'=> $this->extra_poa_id
        ];
    }
}

