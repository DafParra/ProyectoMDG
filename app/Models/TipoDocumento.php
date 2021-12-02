<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table="tipodocumento";
    protected $primaryKey="idTipoDocumento";
    public $timestamps = false;


    public function login()
{
     return $this->hasMany(Login::class);
}

    use HasFactory;
}
