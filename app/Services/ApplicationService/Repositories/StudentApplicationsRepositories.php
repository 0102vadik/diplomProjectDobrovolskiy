<?php

namespace App\Services\ApplicationService\Repositories;

use App\Contracts\IRepositories;
use App\Models\Student_application;
use Illuminate\Database\Eloquent\Collection;

class StudentApplicationsRepositories implements IRepositories
{


    public function getAll(): Collection
    {
        return Student_application::all();
    }

    public function delete($id): void
    {
        Student_application::destroy($id);
    }

    public function create(array $info)
    {
        Student_application::insert([
            "message" => $info['message'],
            "id_company" => $info['idCompany'],
            "id_student" => $info['idStudent'],
            "header" => $info['header'],
            "status" => "Ожидание ответа"
        ]);
    }

    public function update($id, array $newDetails)
    {
        Student_application::where('id_application', $id)->updated($newDetails);
    }
}
