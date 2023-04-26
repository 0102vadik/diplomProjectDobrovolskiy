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
            "id_course" => $info['idCourse'],
            "status" => "Ожидание ответа"
        ]);
    }

    public function update($id, array $newDetails)
    {
        Student_application::where('id_application', $id)->updated($newDetails);
    }

    public function getByIdCourse(int $idCourse){
        return Student_application::join('student_infos','student_applications.id_student','=','student_infos.id_student')
            ->select('student_applications.*','student_infos.name','student_infos.photo_src','student_infos.surname','student_infos.patronymic')
            ->where('id_course',$idCourse)
            ->get();
    }

    public function statusSuccess(int $idApplication){
        Student_application::where('id_application',$idApplication)->update([
            'status' => 'Заявка принята'
        ]);
    }

    public function statusReject(int $idApplication){
        Student_application::where('id_application',$idApplication)->update([
            'status' => 'Заявка отклонена'
        ]);
    }

    public function getApplicationByStudent(int $idStudents){
        return Student_application::join('company_infos','student_applications.id_company','=','company_infos.id_company')
            ->select('student_applications.*','company_infos.phone_contact','company_infos.logo_src','company_infos.city','company_infos.company_name','company_infos.id_company')
            ->where('student_applications.id_student',$idStudents)->get();
    }
}
