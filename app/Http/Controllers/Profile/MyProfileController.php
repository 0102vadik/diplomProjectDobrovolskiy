<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Services\CompanyService\Repositories\CompanyRepositories;
use App\Services\StudentService\Repositories\StudentRepositories;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class MyProfileController extends Controller
{
    protected StudentRepositories $studentRepositories;
    protected CompanyRepositories $companyRepositories;

    public function __construct(StudentRepositories $studentRepositories, CompanyRepositories $companyRepositories)
    {
        $this->companyRepositories = $companyRepositories;
        $this->studentRepositories = $studentRepositories;
    }

    public function indexStudents(): Factory|View|Application
    {
        return view('pages.my-profile', [
            'information' => $this->studentRepositories->getStudentsById(Auth::id())
        ]);
    }

    public function indexCompany(): Factory|View|Application
    {
        return view('pages.my-profile', [
            'information' => $this->companyRepositories->getCompanyById(Auth::id())
        ]);
    }
}
