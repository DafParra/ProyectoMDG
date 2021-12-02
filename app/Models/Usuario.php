<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table="users";
    protected $primaryKey="id";
    public $timestamps = false;


    public function tipo_docu()
    {
        return $this->belongsTo(TipoDocumento::class);
    }
    public function tipo_usu()
    {
        return $this->belongsTo(TipoUsuario::class);
    }

    use HasFactory;
}
