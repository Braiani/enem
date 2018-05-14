<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    public $timestamps = false;

    public function getNotSearchableAttribute()
    {
        return ['id', 'edicao_id', 'nu_inscricao', 'cn', 'ch', 'lc', 'mat', 'red'];
    }
}
