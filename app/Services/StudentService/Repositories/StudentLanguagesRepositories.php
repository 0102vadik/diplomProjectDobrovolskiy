<?php

namespace App\Services\StudentService\Repositories;

use App\Contracts\IRepositories;
use App\Models\Student_language;
use Illuminate\Support\Facades\Auth;

class StudentLanguagesRepositories implements IRepositories
{

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function delete($id)
    {

    }

    public function deleteByStudentsId($id)
    {
        Student_language::where('id_student',$id)->delete();
    }

    public function create(array $info)
    {
        // TODO: Implement create() method.
    }

    public function update($id, array $newDetails)
    {
        // TODO: Implement update() method.
    }

    public function updateStudentLanguage(array $newLanguage){
        $this->deleteByStudentsId(Auth::id());
        foreach ($newLanguage as $language){
            Student_language::insert([
                'id_student' => Auth::id(),
                'id_language' => $language
            ]);
        }
    }
}
