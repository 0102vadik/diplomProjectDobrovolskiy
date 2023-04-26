<?php

namespace App\Http\Controllers;

use App\Services\ApplicationService\StudentApplicationService;
use Illuminate\Http\Request;

class StudentApplicationController extends Controller
{
    protected StudentApplicationService $applicationService;

    public function __construct()
    {
        $this->applicationService=new StudentApplicationService();
    }

    public function sandApplication(Request $request){
        $this->applicationService->sandApplication($request->message,$request->idCompany,$request->header,$request->idCourse);
        return redirect()->to(route('success'));
    }

    public function index(int $idCompany,int $idCourse){
        return view('pages.send-application',[
            'idCompany' => $idCompany,
            'idCourse' => $idCourse
        ]);
    }

    public function getStudentsByIdCourse(int $idCourse){
        return view('pages.student-applications',[
            'applications' => $this->applicationService->getApplicationByIdCourse($idCourse),
            'idCourse'=>$idCourse
        ]);
    }

    public function successApplication(int $idApplication,int $idCourse){
        $this->applicationService->successApplication($idApplication);
        return redirect()->to('/my-applications/students/'.$idCourse);
    }

    public function rejectApplication(int $idApplication,int $idCourse){
        $this->applicationService->rejectApplication($idApplication);
        return redirect()->to('/my-applications/students/'.$idCourse);
    }

    public function getApplicationStudents(){
        return view('pages.my-application',[
            'applicationInfo' =>$this->applicationService->getApplicationStudent()
        ]);
    }
}
