<?php

namespace App\Imports;

use App\Models\Cilent;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class CilentExcelImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        $cilents = [];
        foreach ($rows as $row)
        {
           array_push ($cilents,[
                'client_name' => $row[0],
                'workplace' => $row[1],
                'client_salary' => $row[2],
                'age' => $row[3],
                'gender' => $row[4],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
        array_shift($cilents);
        DB::beginTransaction();
        try{
            Cilent::insert($cilents);
            DB::commit();
        }catch(\Throwable $th){
            DB::rollBack();
            return  response()->json(['message' => 'error'],500);
        }

    }
}
