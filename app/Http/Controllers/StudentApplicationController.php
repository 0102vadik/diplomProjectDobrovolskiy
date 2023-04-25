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
}
