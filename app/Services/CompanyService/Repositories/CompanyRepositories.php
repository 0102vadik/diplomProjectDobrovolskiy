<?php

namespace App\Services\CompanyService\Repositories;

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

    public function updateCompany($companyId, array $newDetails)
    {
        Company_info::where('id_company',$companyId)->update([
            'company_name' => $newDetails['companyName'],
            'description'=> $newDetails['description'],
            'phone_contact'=> $newDetails['companyPhone'],
            'city'=> $newDetails['companyPlace'],
        ]);
    }

    public function updateLogo(int $companyId,string $src){
        Company_info::where('id_company',$companyId)->update([
            'logo_src' => $src
        ]);
    }

    public function getCompanyById(int $id){
        return Company_info::find($id);
    }
}
