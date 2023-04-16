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

    public function sandApplication(string $message, int $idCompany, string $header)
    {
        $this->studentApplicationRepositories
            ->create(array_merge(compact("message","idCompany","header"),array("idStudent"=>Auth::id())));
    }

}
