<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ScrimResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'is_enabled_scrim' => $this->is_enabled_scrim,
            'scrim_name' => $this->scrim_name,
            'number_of_teams' => $this->number_of_teams,
            'max_number_of_teams' => $this->max_number_of_teams,
            'number_first_slot' => $this->number_first_slot,
            'number_of_vip_slots' => $this->number_of_vip_slots,
            'activate_remove_unconfirmed' => $this->activate_remove_unconfirmed,
            'activate_schedules' => $this->activate_schedules,
            'activate_results' => $this->activate_results,
            'slots' => new SlotCollection($this::find($this->id)->slots),
        ];
    }

}
