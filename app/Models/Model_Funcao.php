<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Model_Funcao extends Model
{
    use HasFactory;

    protected $table = 'TB_FUNCAO';

    protected $fillable = [
        'pk_id',
        'funcao',
    ];

    protected $primaryKey = 'pk_id';
    public $timestamps = false;
}
