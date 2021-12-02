<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table="tipousuario";
    protected $primaryKey="idTipoUsuario";
    public $timestamps = false;


    public function login()
{
     return $this->hasMany(Login::class);
}

    use HasFactory;
}
