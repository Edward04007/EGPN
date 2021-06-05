<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Resource_Gabarito extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /* return parent::toArray($request); */

        return [
            'pk_id' => trim($this->pk_id),
            'gabarito' => trim($this->gabarito),
          ];
    }
}
