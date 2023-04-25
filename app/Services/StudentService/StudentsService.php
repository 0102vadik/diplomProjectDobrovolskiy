<?php

namespace App\Services\StudentService;

use App\Contracts\IStudentsRepositories;
use App\Models\Student_info;
use App\Services\StudentService\Logical\Student;
use App\Services\StudentService\Repositories\StudentRepositories;

class StudentsService
{
    protected array $arrayStudents = [];

    protected IStudentsRepositories $studentsRepositories;

    public function __construct()
    {
        $this->studentsRepositories = new StudentRepositories();
        $arrayStudentsInfo = $this->studentsRepositories->getAllStudentInfo();
        foreach ($arrayStudentsInfo as $student) {
            $studentInfo = Student_info::find($student['id_student'])->getLanguages;
            $arrayStudentsLanguage = [];
            foreach ($studentInfo as $language) {
                array_push($arrayStudentsLanguage, $language->getLanguage);
            }
            if (!in_array(null, $student) || empty($arrayStudentsLanguage)) {
                array_push($this->arrayStudents, new Student($student, $arrayStudentsLanguage));
            }
        }
    }

    public function getStudents(): array
    {
        return $this->arrayStudents;
    }

    public function getStudentsById($idStudents)
    {
        return $this->studentsRepositories->getStudentsById($idStudents);
    }

    public function getStudentsSort(array $type,array $city,array $language,array $shedule)
    {
        $sortedStudents = [];
        foreach ($this->arrayStudents as $student) {
            if(in_array($student->getDataQuestionnaire()->getCity(), $city)){
                array_push($sortedStudents,$student);
            }
        }
    }

}
