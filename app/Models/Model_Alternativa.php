<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Alternativa extends Model
{
    use HasFactory;

    protected $table = 'TB_ALTERNATIVA';

    protected $fillable = [
        'pk_id',
        'fk_assunto',
        'questao',
        'alternativa_a',
        'alternativa_b',
        'alternativa_c',
        'alternativa_d',
        'alternativa_e',
        'gabarito'
    ];


    protected $primaryKey = 'pk_id';
    public $timestamps = false;
}
