<?php

namespace App\Contracts;

interface IStudentsRepositories
{
    public function getAllStudentInfo();
    //public function getOrderById($orderId);
    public function deleteStudent($studentId);
    public function createStudent(array $studentInfo);
    public function updateStudent($studentId, array $newDetails);
}
