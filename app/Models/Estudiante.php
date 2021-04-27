<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable=['nombre','segundoNombre','apellidoPaterno','apellidoPaterno','fechaNacimiento'];

    public function direccion(){

        return $this->hasOne(DireccionEstudiante::class,'estudiante_id');
    }}
