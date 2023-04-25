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
            if (!in_array(null, $student) && !empty($arrayStudentsLanguage)) {
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

    public function getStudentsSort($city,$specialization,$income,$shedule)
    {
        $sortedStudents = [];
        if ($city == null){
            $city = ['Могилёв', 'Минск', 'Гродно', 'Гомель', 'Брест'];
        }
        if ($specialization == null){
            $specialization = ['Front-end разработчик', 'Back-end разработчик', 'Fullstack разработчик', 'Разработчик игр', 'Разработчик моб. приложений','Тестировщик','Менеджер проекта'];
        }
        if ($income == null){
            $income = ['Доход не указан', 'От 500 руб.', 'От 1000 руб.', 'От 1500 руб.', 'От 2000 руб.','От 2500 руб.'];
        }
        if ($shedule == null){
            $shedule = ['Полный день', 'Сменный график', 'Гибкий график', 'Удалённая работа'];
        }
        foreach ($this->arrayStudents as $student) {
            if(in_array($student->getDataQuestionnaire()->getCity(), $city)
                && in_array($student->getDataQuestionnaire()->getSpecialization(),$specialization)
                && in_array($student->getDataQuestionnaire()->getPreferredIncome(),$income)
                && in_array($student->getDataQuestionnaire()->getPreferredSchedule(),$shedule)){
                array_push($sortedStudents,$student);
            }
        }
        return $sortedStudents;
    }

}
