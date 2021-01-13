<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    public $timestamps = false;
    protected $table = 'medicamentos';
    protected $primaryKey = 'idmedicamento';

    public function procedimentos(){

        return $this->belongsToMany("App\Procedimento", "item_medicamentos")->withPivot('quantidade');;

    }
}
