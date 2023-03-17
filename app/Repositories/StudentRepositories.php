<?php

namespace App\Repositories;

use App\Contracts\IStudentsRepositories;
use App\Models\Student_info;

class StudentRepositories implements IStudentsRepositories
{
    public function getAllStudentInfo(): array
    {
        return Student_info::all()->toArray();
    }

    public function deleteStudent($studentId)
    {
        Student_info::destroy($studentId);
    }

    public function createStudent(array $studentInfo)
    {
        Student_info::create($studentInfo);
    }

    public function updateStudent($studentId, array $newDetails)
    {
        Student_info::whereId($studentId)->update($newDetails);
    }
}
