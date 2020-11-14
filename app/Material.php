<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'idmaterial';

    public function search($filter){
        $results = $this->where(function ($query) use($filter){

            if($filter){
                $query->where('idmaterial', 'LIKE', "%{$filter}%");
            }
        })//->toSql();
        ->paginate();

        return $results;
    }
}
