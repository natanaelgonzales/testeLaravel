<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportCourseController extends Controller
{
    public function importCourse()
    {
        $xmlfile = 'C:\Users\Pichau\Downloads\cursos.xml';
        $xml = simplexml_load_file($xmlfile);

        foreach ($xml->curso as $curso) {
            $nomeCurso = $curso->nome;
            $codigoCurso = $curso->codigo;
        }
    }
}
