<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Resource_Assunto extends JsonResource
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
            'pk_id' => (int) trim($this->pk_id),
            'fk_disciplina' => (int) trim($this->fk_disciplina),
            'assunto' => trim($this->assunto),
          ];
    }
}
