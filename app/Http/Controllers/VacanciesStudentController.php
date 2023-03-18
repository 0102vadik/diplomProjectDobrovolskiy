<?php

namespace App\Http\Controllers;

use App\Contracts\ICompanyRepositories;
use App\Models\Student_info;
use App\Models\Student_language;
use App\Modules\CompanyModule\CompanyService;
use App\Modules\StudentModule\Student;
use App\Repositories\StudentRepositories;
use Illuminate\Http\Request;

class VacanciesStudentController extends Controller
{
    protected CompanyService $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function index()
    {
        return view('pages.home', [
            'arrayObject' => $this->companyService->getArrayCompany()
        ]);
    }
}
