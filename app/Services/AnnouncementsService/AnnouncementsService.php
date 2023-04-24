<?php

namespace App\Services\AnnouncementsService;

use App\Contracts\IRepositories;
use App\Services\AnnouncementsService\Repositories\AnnouncementsFromCompaniesRepository;
use Illuminate\Support\Facades\Auth;

class AnnouncementsService
{
    protected IRepositories $repositories;

    public function __construct()
    {
        $this->repositories = new AnnouncementsFromCompaniesRepository();
    }

    public function sandAnnouncements(string $description, int $idAuthor, string $header,string $expectation_date,string $type)
    {
        $this->repositories
            ->create(compact("description","idAuthor","header","expectation_date","type"));
    }

    public function getAnnouncementsUser(){
        return $this->repositories->getAllByIdAuthor(Auth::id());
    }

    public function deleteAnncouncement(int $id){
        $this->repositories->delete($id);
    }

    public function getAll(){
        return $this->repositories->getAll();
    }

    public function getById(int $id){
        return $this->repositories->getById($id);
    }

}
