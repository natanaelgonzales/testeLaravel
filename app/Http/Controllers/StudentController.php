<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function createStudent()
    {
        return 'criar aluno';
    }

    public function editStudent()
    {
        return 'editar aluno';
    }

    public function deleteStudent()
    {
        return 'deletar aluno';
    }

    public function listStudentsByID()
    {
        return 'visualizar alunos por id';
    }
}
