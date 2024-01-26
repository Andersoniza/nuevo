<?php


namespace App\Http\Resources;


use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class GeneralActivityPoaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'title'=> $this->title,
            'startDate'=> $this->startDate,
            'finalDate'=> $this->finalDate,
            'indicator_poa_id'=> $this->indicator_poa_id,
            'activity_pei_id'=> $this->activity_pei_id,
            'user_id'=> $this->user_id,
            'experimental_station_id'=> $this->experimental_station_id
        ];
    }
}
