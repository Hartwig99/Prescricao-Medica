<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Procedimento extends Model
{
    public $timestamps = false;
    protected $table = 'procedimentos';
    protected $primaryKey = 'idprocedimento';
    
    public function medicamentos()
    {
        return $this->belongsToMany("App\Medicamento", "item_medicamentos")->withPivot('quantidade');;
    } 

    public function materials()
    {
        return $this->belongsToMany("App\Material","item_materials")->withPivot('quantidade');;
    }
   
}
