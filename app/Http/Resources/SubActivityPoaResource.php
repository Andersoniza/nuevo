<?php


namespace App\Http\Resources;


use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class SubActivityPoaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'title'=> $this->title,
            'general_activitys_id'=> $this->general_activitys_poa_id,
            'user_id'=> $this->user_id,
            'type_poa_id'=> $this->type_poa_id,
        ];
    }
}
