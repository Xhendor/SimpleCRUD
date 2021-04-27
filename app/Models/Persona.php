<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{

    use HasFactory;
    protected $table = 'Personas';
    public $timestamps = true;
    protected $fillable = [

        'nombreA', 'nombreB','apellidoPaterno','apellidoMaterno','fechaNacimiento','telefono'

    ];

    public function  direccion(){

        return $this->hasOne(Direccion::class,'personas_id');

    }
}
