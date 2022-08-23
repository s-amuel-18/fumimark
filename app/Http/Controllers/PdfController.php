<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Dompdf\Adapter\PDFLib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public function cartaPresentacion()
    {
        // dd(storage_path("asset.png"));
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdf.carta_precentacion');
        return $pdf->stream('Presentacion.pdf');
    }
    public function Services()
    {
        $services = Service::get();
        $data["services"] = $services;

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdf.services', compact("data"));
        return $pdf->stream('lista de servicios.pdf');
    }

    public function cotizacion($data)
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdf.budget', compact("data"));
        return $pdf->stream('Cotizacion.pdf');
    }
}
