<?php

namespace App\Http\Controllers;

use App\Imports\MenuImport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelUploadController extends Controller
{

    public function menuImportView()
    {
        return view('upload');
    }

    public function menutImport()
    {
        Excel::import(new MenuImport(), request()->file('file'));

        return back();
    }
}
