<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Resource_Questeos extends JsonResource
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
            'fk_assunto' => (int) trim($this->fk_assunto),
            'questao' => trim($this->questao),
            'alternativa_a' => trim($this->alternativa_a),
            'alternativa_b' => trim($this->alternativa_b),
            'alternativa_c' => trim($this->alternativa_c),
            'alternativa_d' => trim($this->alternativa_d),
            'alternativa_e' => trim($this->alternativa_e),
            'gabarito' => trim($this->gabarito),
          ];
    }
}
