<?php

namespace App\Exports;

use App\ActAcad;
use Maatwebsite\Excel\Concerns\FromCollection;

class ActAcadExport implements FromCollection
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
        return ActAcad::where('id','=', $this->id )->get();
    }
}
