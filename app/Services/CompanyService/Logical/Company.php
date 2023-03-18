<?php

namespace App\Services\CompanyService\Logical;

use App\Contracts\IQuestionnaire;
use Mockery\Exception;

class Company implements IQuestionnaire
{
    protected string $nameCompany;
    protected int $id;
    protected string $description;
    protected string $logoSrc;
    protected string $phoneContact;
    protected string $city;

    public function __construct(array $information)
    {
        try {
            $this->nameCompany = $information['company_name'] ;
            $this->id = $information['id_company'];
            $this->description = $information['description'] ?? "";
            $this->logoSrc = $information['logo_src'] ?? "";
            $this->phoneContact = $information['phone_contact'];
            $this->city = $information['city'] ?? "";
        } catch (Exception $e) {
            throw new Exception();
        }

    }

    /**
     * @return string
     */
    public function getNameCompany(): string
    {
        return $this->nameCompany;
    }

    /**
     * @param string $nameCompany
     */
    public function setNameCompany(string $nameCompany): void
    {
        $this->nameCompany = $nameCompany;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getLogoSrc(): string
    {
        return $this->logoSrc;
    }

    /**
     * @param string $logoSrc
     */
    public function setLogoSrc(string $logoSrc): void
    {
        $this->logoSrc = $logoSrc;
    }

    /**
     * @return string
     */
    public function getPhoneContact(): string
    {
        return $this->phoneContact;
    }

    /**
     * @param string $phoneContact
     */
    public function setPhoneContact(string $phoneContact): void
    {
        $this->phoneContact = $phoneContact;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

}
