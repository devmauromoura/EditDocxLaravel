<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class EditWordController extends Controller
{
    public function index(){
        return view('index');
    }

    public function data(Request $request){            
            try {
                $templateProcessor = new TemplateProcessor($request->file('word')->path());
                $templateProcessor->setValue('nome', $request->nome);
                $templateProcessor->setImageValue('assinatura', $request->file('image')->path());
                $templateProcessor->saveAs('arquivoalterado.docx');

                $file = public_path()."\arquivoalterado.docx";
                return Response()->download($file);

            } catch (\Throwable $th) {
                //throw $th;
                dd($th);
            }

    }
}
