<?php

namespace App\Exports;

use App\Desgloce;
use Maatwebsite\Excel\Concerns\FromCollection;

class DesgloceExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function collection()
    {
        return Desgloce::where('actividad_id','=', $this->id )->get();
    }
}
