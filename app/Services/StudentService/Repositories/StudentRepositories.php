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
        Student_info::where('id_student',$studentId)->update([
            'name' => $newDetails['studentName'],
            'description'=> $newDetails['description']

        ]);
    }

    public function updatePhoto(int $studentId,string $src){
        Student_info::where('id_student',$studentId)->update([
            'photo_src' => $src
        ]);
    }

    public function getStudentsById(int $id)
    {
        return Student_info::find($id)->toArray();
    }
}
