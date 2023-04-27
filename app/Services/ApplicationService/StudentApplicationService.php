<?php

namespace App\Services\ApplicationService;

use App\Contracts\IRepositories;
use App\Models\User;
use App\Services\ApplicationService\Repositories\StudentApplicationsRepositories;
use Illuminate\Support\Facades\Auth;

class StudentApplicationService
{
    protected IRepositories $studentApplicationRepositories;

    public function __construct()
    {
        $this->studentApplicationRepositories = new StudentApplicationsRepositories();
    }

    public function sandApplication(string $message, int $idCompany, string $header,int $idCourse)
    {
        $this->studentApplicationRepositories
            ->create(array_merge(compact("message","idCompany","header","idCourse"),array("idStudent"=>Auth::id())));
    }

    public function getApplicationByIdCourse(int $idCourse){
        return $this->studentApplicationRepositories->getByIdCourse($idCourse);
    }

    public function successApplication(int $idApplication){
        $this->studentApplicationRepositories->statusSuccess($idApplication);
    }

    public function rejectApplication(int $idApplication){
        $this->studentApplicationRepositories->statusReject($idApplication);
    }

    public function getApplicationStudent(){
        return $this->studentApplicationRepositories->getApplicationByStudent(Auth::id());
    }
    public function deleteById(int $id){
        $this->studentApplicationRepositories->delete($id);
    }

}
