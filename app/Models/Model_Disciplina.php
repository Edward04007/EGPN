<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Disciplina extends Model
{
    use HasFactory;

    protected $table = 'TB_DISCIPLINAS';

    protected $fillable = [
        'pk_id',
        'disciplina'
    ];

    protected $primaryKey = 'pk_id';
    public $timestamps = false;
}
