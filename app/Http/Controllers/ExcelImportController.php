<?php

namespace App\Http\Controllers;

use App\Imports\CilentExcelImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelImportController extends Controller
{
    public function importFromExcel(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ],[
            'file.required' => "Fayl kiriting",
        ]);

        // Get the uploaded file
        $file = $request->file('file');

        // Process the Excel file
        Excel::import(new CilentExcelImport, $file);

        return response()->json(['message' => 'Excel fayl yuklandi'],200);
    }
}
