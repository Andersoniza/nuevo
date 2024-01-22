<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ObjectiveResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'title'=> $this->title,
            'indicatorPei_id'=> $this->indicator_pei_id,
            'typePei_id'=> $this->type_pei_id,
            'departament_id'=> $this->departament_id,
            'category_id'=> $this->category_id,
            'area_id'=> $this->area_id,
            'user_id'=> $this->user_id
        ];
    }
}
