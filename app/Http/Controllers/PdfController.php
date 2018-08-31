<?php

namespace App\Http\Controllers;

use PDF;

class PdfController extends Controller
{
    public function index()
    {
        $pdf = PDF::loadView('pdf.test.index', []);
        return $pdf->download('test.pdf');
    }
}
