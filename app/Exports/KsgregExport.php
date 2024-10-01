<?php

namespace App\Exports;

use App\Models\Ksgreg;
use Maatwebsite\Excel\Concerns\FromCollection;

class KsgregExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
    
        return Ksgreg::all();
    
    }
}
