<?php

namespace web\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use web\Servidor;
use web\Setor;

class PDFController extends Controller
{
    public function selecao()
    {
        return view('pdf.selecao_pdf');
    }

    public function gerarPdf(Request $request)
    {
        if($request->download == 'download')
        {
            switch ($request->rb)
            {
                case 'Solitacoes':
                    break;
                case 'Usuarios':
                   $pdf = $this->usuarioPdfDown();
                    return $pdf->download('Usuarios.pdf');
                    break;
                case 'Servidores':
                    $pdf = $this->servidorPdfDown();
                    return $pdf->download('Servidores.pdf');
                    break;
                case 'Setores':
                    $pdf = $this->setorPdfDown();
                    return $pdf->download('Setores.pdf');
                    break;
                case 'Departamentos':
                    $pdf = $this->departamentoPdfDown();
                    return $pdf->download('Departamentos.pdf');
                    break;
                case 'Salas_Predios':
                    break;
                case 'Bens_Moveis':
                    break;
            }

        }
        else
        {
            switch ($request->rb)
            {
                case 'Solitacoes':
                    break;
                case 'Usuarios':
                    $pdf = $this->usuarioPdfStream();
                    return $pdf->stream('Usuarios');
                    break;
                case 'Servidores':
                    $pdf = $this->servidorPdfStream();
                    return $pdf->stream('Servidores');
                    break;
                case 'Setores':
                    $pdf = $this->setorPdfStream();
                    return $pdf->stream('Setores');
                    break;
                case 'Departamentos':
                    $pdf = $this->departamentoPdfStream();
                    return $pdf->stream('Departamentos');
                    break;
                case 'Salas_Predios':
                    break;
                case 'Bens_Moveis':
                    break;
            }

        }
    }

    private function servidorPdfStream()
    {
        $servidores = Servidor::orderBy('nome')->get();
        $view = view('pdf.servidores_pdf', ['servidores' => $servidores]);
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHtml($view);
        return $pdf;

    }

    private function servidorPdfDown()
    {
        $servidores = Servidor::orderBy('nome')->get();
        return PDF::loadView('pdf.servidores_pdf', ['servidores' => $servidores]);
    }

    private function setorPdfStream()
    {
        $setores = Setor::orderBy('descricao')->get();
        $view = view('pdf.setores_pdf', ['setores' => $setores]);
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHtml($view);
        return $pdf;
    }

    private function setorPdfDown()
    {
        $setores = Setor::orderBy('descricao')->get();
        return PDF::loadView('pdf.setores_pdf', ['setores' => $setores]);
    }

     private function usuarioPdfStream()
    {
        $usuarios = Servidor::orderBy('nome')->get();
        $view = view('pdf.usuarios_pdf', ['usuarios' => $usuarios]);
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHtml($view);
        return $pdf;

    }

    private function usuarioPdfDown()
    {
       $usuarios = Servidor::orderBy('nome')->get();
        return PDF::loadView('pdf.usuarios_pdf', ['usuarios' => $usuarios]);
    }

    private function departamentoPdfStream()
    {
        $usuarios = Servidor::orderBy('nome')->get();
        $view = view('pdf.departamento_pdf', ['departamentos' => $departamentos]);
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHtml($view);
        return $pdf;

    }

    private function departamentoPdfDown()
    {
       $usuarios = Servidor::orderBy('departamento')->get();
        return PDF::loadView('pdf.departamento_pdf', ['departamentos' => $departamentos]);
    }

}
