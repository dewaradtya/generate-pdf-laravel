<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = ['title' => 'INVOICE'];
        $pdf = PDF::loadView('pdf.document', $data);
        return $pdf->stream();
    }

    public function PO()
    {
        $data = ['title' => 'po'];
        $pdf = PDF::loadView('pdf.po', $data);
        return $pdf->stream();
    }
}