<?php

namespace App\Http\Controllers\Vacancies;

use App\Http\Controllers\Controller;
use App\Services\CompanyService\CompanyService;

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
