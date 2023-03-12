<?php

namespace App\Modules\StudentModule;

use App\Contracts\IQuestionnaire;
use App\Contracts\IStudents\IStudents;

class Student implements IStudents
{
    protected IQuestionnaire $dataQuestionnaire;
    protected int $id;
    protected array $arrayLanguages=[];

    public function __construct(array $dataQuestionnaire,array $arrayLanguages)
    {
        $this->id = $dataQuestionnaire['id_student'];
        $this->dataQuestionnaire = new DataQuestionnaireStudents($dataQuestionnaire);
        $this->arrayLanguages = $arrayLanguages;
    }

    /**
     * @return IQuestionnaire
     */
    public function getDataQuestionnaire(): IQuestionnaire
    {
        return $this->dataQuestionnaire;
    }

    /**
     * @param IQuestionnaire $dataQuestionnaire
     */
    public function setDataQuestionnaire(IQuestionnaire $dataQuestionnaire): void
    {
        $this->dataQuestionnaire = $dataQuestionnaire;
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
     * @return array
     */
    public function getArrayLanguages(): array
    {
        return $this->arrayLanguages;
    }


}
