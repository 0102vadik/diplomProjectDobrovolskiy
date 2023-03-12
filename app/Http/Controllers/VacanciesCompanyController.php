<?php

namespace App\Http\Controllers;

use App\Models\Student_info;
use App\Models\Student_language;
use App\Modules\StudentModule\Student;
use Illuminate\Http\Request;

class VacanciesCompanyController extends Controller
{
    protected array $arrayStudents = [];

    public function __construct()
    {
        $arrayStudentsInfo = Student_info::all()->toArray();
        foreach ($arrayStudentsInfo as $student) {
            $studentInfo = Student_info::find($student['id_student'])->getLanguages;
            $arrayStudentsLanguage = [];
            foreach ($studentInfo as $language) {
                array_push($arrayStudentsLanguage, $language->getLanguage->toArray());
            }
            array_push($this->arrayStudents, new Student($student, $arrayStudentsLanguage));
        }
    }

    public function index()
    {
        return view('pages.home', [
            'arrayObject' => $this->arrayStudents
        ]);
    }
}
