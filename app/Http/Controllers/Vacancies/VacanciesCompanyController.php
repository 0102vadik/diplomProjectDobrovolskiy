<?php

namespace App\Http\Controllers\Vacancies;

use App\Http\Controllers\Controller;
use App\Services\StudentService\StudentsService;
use GuzzleHttp\Psr7\Request;

class VacanciesCompanyController extends Controller
{

    protected StudentsService $studentsService;
    public function __construct(StudentsService $studentsService)
    {
        $this->studentsService = $studentsService;
    }

    public function index()
    {
        return view('pages.home', [
            'arrayObject' => $this->studentsService->getStudents()
        ]);
    }

    public function moreInformation(int $idStudents){
        return view('pages.application-more',[
            'moreInformation'=>$this->studentsService->getStudentsById($idStudents),
        ]);
    }
}
