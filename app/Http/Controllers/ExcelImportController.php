<?php

namespace App\Http\Controllers;

use App\Exports\CilentExcelExport;
use App\Imports\CilentExcelImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelImportController extends Controller
{
    public function importFromExcel(Request $request)
    {

        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ],[
            'file.required' => "Fayl kiriting",
        ]);


        $file = $request->file('file');

        
        Excel::import(new CilentExcelImport, $file);

        return response()->json(['message' => 'Excel fayl yuklandi'],200);
    }

    public function exportToExcel()
    {
        return Excel::store(new CilentExcelExport, 'cilents_excel.xlsx');
    }
}
