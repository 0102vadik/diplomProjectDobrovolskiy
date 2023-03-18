<?php

namespace App\Contracts;

interface ICompanyRepositories
{
    public function getAllCompanyInfo():array;
    //public function getOrderById($orderId);
    public function deleteCompany($companyId);
    public function createCompany(array $companyInfo);
    public function updateCompany($companyId, array $newInfo);
}
