<?php

namespace App\Services\StudentService\Repositories;

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

    public function getStudentsById(int $id)
    {
        return Student_info::find($id)->toArray();
    }
}
