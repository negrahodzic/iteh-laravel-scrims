<?php

namespace App\Http\Resources;

use App\Models\Score;
use Illuminate\Http\Resources\Json\JsonResource;

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
            'scores' => new ScoreCollection(Score::query()->where('result_id', $this->id)),
        ];

//        $table->string('server_id');
//        $table->string('server_name');
//        $table->string('scrim_name');
//        $table->date('date_played');
    }
}
