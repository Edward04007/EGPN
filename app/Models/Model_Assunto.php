<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Assunto extends Model
{
    use HasFactory;


    protected $table = 'TB_ASSUNTO';

    protected $fillable = [
        'pk_id',
        'fk_disciplina',
        'assunto',
    ];

   /* protected $hidden = [
        '',
    ]; */

    protected $primaryKey = 'pk_id';
    public $timestamps = false;
}
