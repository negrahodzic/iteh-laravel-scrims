<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServerResource extends JsonResource
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
            'server_id' => $this->server_id,
            'enabled_bot' => $this->enabled_bot,
            'scrims' => new ScrimCollection($this::find($this->id)->scrims),
        ];
    }
}
