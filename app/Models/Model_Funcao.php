<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Funcao extends Model
{
    use HasFactory;

    protected $table = 'TB_FUNCAO';

    protected $fillable = [
        'pk_id',
        'funcao',
    ];

   /* protected $hidden = [
        '',
    ]; */

    protected $primaryKey = 'pk_id';
    public $timestamps = false;
}
