<?php

namespace App\Imports;

use App\Desgloce;
use Maatwebsite\Excel\Concerns\ToModel;

class DesgloceImport implements ToModel
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
        return new Desgloce([
            'actividad_id'  => $this->id,
            'ccontable_id'  => $row[2],
            'cantidad'      => $row[3],
            'recurso'       => $row[4],
            'proveedor'     => $row[5],
            'precio'        => $row[6],
            'Total'         => $row[7]
        ]);
    }
}
