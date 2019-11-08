<?php

namespace App\Imports;

use App\ActAcad;
use Maatwebsite\Excel\Concerns\ToModel;

class ActAcadImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

     public function __construct(int $id)
    {
        $this->id = $id;
        
    }

    public function model(array $row)
    {
        return new ActAcad([
            'user_id'           =>  $row[1],
            'ciclo_id'          =>  $row[3],
            'nombre'            =>  $row[2],
            'seccions_id'       =>  $row[5],
            'linea_accion_id'   =>  $row[6],
            'area_id'           =>  $row[4],
            'descripcion'       =>  $row[9],
            'objetivo'          =>  $row[10],
            'fechainicio'       =>  $row[7],
            'fechafin'          =>  $row[8],
            'estado'            =>  'Pendiente',
            'prioridads_id'     =>  $row[15],
            'gestions_id'       =>  $row[16],

        ]);
    }
}
