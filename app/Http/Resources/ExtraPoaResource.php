<?php


namespace App\Http\Resources;


use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class ExtraPoaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name'=> $this->name,
            'type_poa_id'=> $this->type_poa_id
        ];
    }
}

