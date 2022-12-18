<?php

namespace App\Http\Resources;

use App\Models\Score;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ScoreCollection;
use Illuminate\Support\Facades\DB;

class ResultResource extends JsonResource
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
            'id' => $this->id,
            'server_id' => $this->server_id,
            'server_name' => $this->server_name,
            'scrim_name' => $this->scrim_name,
            'date_played' => $this->date_played,
            'scores' => new ScoreCollection($this::find($this->id)->scores),
        ];

    }
}
