<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desarrollador extends Model
{
    protected $table='desarrolladores';

    public function cursos(){

        return $this->hasMany(Curso::class);
    }

}
