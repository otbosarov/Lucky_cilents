<?php

namespace App\Exports;

use App\Models\Cilent;
use Maatwebsite\Excel\Concerns\FromCollection;

class CilentExcelExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Cilent::get();
    }
}
