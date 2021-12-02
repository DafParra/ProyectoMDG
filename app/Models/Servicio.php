<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table="servicio";
    protected $primaryKey="idServicio";
    public $timestamps = false;


public function tipoServicio(){
    return $this->hasOne('App\Models\TipoServicio','idTipoServicio','idTipServicioFK');
}


    use HasFactory;
}

