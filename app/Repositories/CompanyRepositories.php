<?php

namespace App\Repositories;

use App\Contracts\ICompanyRepositories;
use App\Models\Company_info;

class CompanyRepositories implements ICompanyRepositories
{

    public function getAllCompanyInfo(): array
    {
        return Company_info::all()->toArray();
    }

    public function deleteCompany($companyId)
    {
        Company_info::destroy($companyId);
    }

    public function createCompany(array $companyInfo)
    {
        Company_info::create($companyInfo);
    }

    public function updateCompany($companyId, array $newInfo)
    {
        Company_info::update($companyId,$newInfo);
    }
}
