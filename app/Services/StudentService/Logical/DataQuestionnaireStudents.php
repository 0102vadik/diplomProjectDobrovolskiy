<?php

namespace App\Services\StudentService\Logical;

use App\Contracts\IQuestionnaire;

class DataQuestionnaireStudents implements IQuestionnaire
{
    protected int $id;
    protected string $name;
    protected string $surname;
    protected string $patronymic;
    protected int $course;
    protected string $group;
    protected string $description;
    protected string $photo_src;
    protected string $city;
    protected string $specialization;
    protected string $preferred_schedule;
    protected string $preferred_income;

    public function __construct(array $dataQuestionnaire)
    {
        $this->name = $dataQuestionnaire['name'];
        $this->surname = $dataQuestionnaire['surname'];
        $this->patronymic = $dataQuestionnaire['patronymic'];
        $this->course = $dataQuestionnaire['course'];
        $this->group = $dataQuestionnaire['group'];
        $this->city = $dataQuestionnaire['city'] ?? "";
        $this->description = $dataQuestionnaire['description'] ?? "";
        $this->photo_src = $dataQuestionnaire['photo_src'] ?? "";
        $this->id = $dataQuestionnaire['id_student'];
        $this->specialization = $dataQuestionnaire['specialization'];
        $this->preferred_schedule = $dataQuestionnaire['preferred_schedule'];
        $this->preferred_income = $dataQuestionnaire['preferred_income'];
    }


    /**
     * @return string
     */
    public function getSpecialization(): string
    {
        return $this->specialization;
    }

    /**
     * @param string $specialization
     */
    public function setSpecialization(string $specialization): void
    {
        $this->specialization = $specialization;
    }

    /**
     * @return string
     */
    public function getPreferredSchedule(): string
    {
        return $this->preferred_schedule;
    }

    /**
     * @param string $preferred_schedule
     */
    public function setPreferredSchedule(string $preferred_schedule): void
    {
        $this->preferred_schedule = $preferred_schedule;
    }

    /**
     * @return string
     */
    public function getPreferredIncome(): string
    {
        return $this->preferred_income;
    }

    /**
     * @param string $preferred_income
     */
    public function setPreferredIncome(string $preferred_income): void
    {
        $this->preferred_income = $preferred_income;
    }

    public function getId(){
        return $this->id;
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


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getPatronymic(): string
    {
        return $this->patronymic;
    }

    /**
     * @param string $patronymic
     */
    public function setPatronymic(string $patronymic): void
    {
        $this->patronymic = $patronymic;
    }

    /**
     * @return int
     */
    public function getCourse(): int
    {
        return $this->course;
    }

    /**
     * @param int $course
     */
    public function setCourse(int $course): void
    {
        $this->course = $course;
    }

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @param string $group
     */
    public function setGroup(string $group): void
    {
        $this->group = $group;
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
    public function getPhotoSrc(): string
    {
        return $this->photo_src;
    }

    /**
     * @param string $photo_src
     */
    public function setPhotoSrc(string $photo_src): void
    {
        $this->photo_src = $photo_src;
    }

}
