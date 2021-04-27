<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DireccionEstudiante extends Model
{
    use HasFactory;
    protected $fillable=['direccion'];

    public function estudiante(){

        return $this->belongsTo(Estudiante::class);
    }
}
