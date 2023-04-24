<?php

namespace App\Services\CompanyService;

use App\Contracts\ICompanyRepositories;
use App\Services\CompanyService\Logical\Company;
use App\Services\CompanyService\Repositories\CompanyRepositories;
use Illuminate\Support\Facades\Auth;

class CompanyService
{

    protected array $arrayCompany = [];
    protected ICompanyRepositories $companyRepositories;

    public function __construct()
    {
        $this->companyRepositories = new CompanyRepositories();
        foreach ($this->companyRepositories->getAllCompanyInfo() as $company) {
            array_push($this->arrayCompany, new Company($company));
        }

    }

    /**
     * @return array
     */
    public function getArrayCompany(): array
    {
        return $this->arrayCompany;
    }

    public function getCompanyById(){
        return $this->companyRepositories->getCompanyById(Auth::id());
    }

    /**
     * @param array $arrayCompany
     */
    public function setArrayCompany(array $arrayCompany): void
    {
        $this->arrayCompany = $arrayCompany;
    }

    /**
     * @return ICompanyRepositories
     */
    public function getCompanyRepositories(): ICompanyRepositories
    {
        return $this->companyRepositories;
    }

    /**
     * @param ICompanyRepositories $companyRepositories
     */
    public function setCompanyRepositories(ICompanyRepositories $companyRepositories): void
    {
        $this->companyRepositories = $companyRepositories;
    }


}
