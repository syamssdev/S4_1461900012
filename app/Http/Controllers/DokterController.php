<?php

namespace App\Http\Controllers;

use App\Imports\ExcelImport;
use App\Models\Dokter;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DokterController extends Controller
{
    public function index()
    {
        $data = Dokter::get();
        return view("index_0012", compact('data'));
    }

    public function import(Request $request)
    {
        Excel::import(new ExcelImport, $request->file);
        return redirect('/');
    }
}
