<?php

namespace App\Models\Anime;

use Illuminate\Database\Eloquent\Model;

class Analise extends Model
{
    //tem uma avaliacao
    protected $fillable = [
        'analise',
        'avaliacoes_id'
    ];

    public function avaliacao(){
        return $this->belongsTo('App\Models\Anime\Avaliacao');
    }
}