<?php

namespace App\Http\Controllers\Vacancies;

use App\Http\Controllers\Controller;
use App\Services\AnnouncementsService\AnnouncementsService;
use App\Services\CompanyService\CompanyService;

class VacanciesStudentController extends Controller
{
    protected CompanyService $companyService;
    protected AnnouncementsService $announcementsService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
        $this->announcementsService = new AnnouncementsService();
    }

    public function index()
    {
//        return view('pages.home', [
//            'arrayObject' => $this->companyService->getArrayCompany()
//        ]);

        return view('pages.home', [
            'arrayAnnouncements' => $this->announcementsService->getAll()
        ]);
    }
}
