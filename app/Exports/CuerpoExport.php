<?php

namespace App\Exports;

use App\Models\CuerpoEx;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CuerpoExport implements FromCollection, WithHeadingRow, ToModel
{
    public $cuerpos;

    public function __construct($cuerpos)
    {
        $this->cuerpos= $cuerpos;
    }

    
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return $this->cuerpos;
    }
    
    public function model(array $row){
        return new CuerpoEx ([
            'name'=> $row ['EXP'],
            'identifica' =>$row ['Identificado'],
        ]);
    }
}
