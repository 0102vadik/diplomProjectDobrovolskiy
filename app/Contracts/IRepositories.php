<?php

namespace App\Contracts;

interface IRepositories
{
    public function getAll();
    //public function getOrderById($id);
    public function delete($id);
    public function create(array $info);
    public function update($id, array $newDetails);
}
