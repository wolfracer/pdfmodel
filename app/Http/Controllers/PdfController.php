<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PDF;


class PdfController extends Controller
{
    /*public function invoice()
    {
        $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('pdf.invoice', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
    }*/

    public function getData()
    {
        $data = ['name' => 'Jon Doe'];
        return $data;
    }

    public function generatePDF()
    {
        $data = $this->getData();
        $pdf = PDF::LoadView('index', $data);

        return $pdf->download('pdfex.pdf');
    }
}
