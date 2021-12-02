<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoServicio extends Model
{
    protected $table="tiposervicio";
    protected $primaryKey="idTipoServicio";
    public $timestamps = false;

    use HasFactory;
}
