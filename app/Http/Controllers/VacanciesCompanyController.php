<?php

namespace App\Http\Controllers;

use App\Contracts\IStudentsRepositories;
use App\Models\Student_info;
use App\Models\Student_language;
use App\Modules\StudentModule\Student;
use App\Modules\StudentModule\StudentsService;
use App\Repositories\StudentRepositories;
use Illuminate\Http\Request;

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
}
