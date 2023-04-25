<?php

namespace App\Services\AnnouncementsService\Repositories;

use App\Contracts\IRepositories;
use App\Models\Announcements_from_companies;
use Carbon\Carbon;

class AnnouncementsFromCompaniesRepository implements IRepositories
{

    public function getAll()
    {
        return Announcements_from_companies::join('company_infos','announcements_from_companies.id_author','=','company_infos.id_company')
            ->select('*')
            ->where('expectation_date','>=',Carbon::today())
            ->get();
    }

    public function delete($id)
    {
        Announcements_from_companies::where('id_course',$id)->delete();
    }

    public function create(array $info)
    {
        Announcements_from_companies::insert([
            "description" => $info['description'],
            "id_author" => $info['idAuthor'],
            "header" => $info['header'],
            "expectation_date" => $info['expectation_date'],
            "type" => $info['type'],
        ]);
    }
    public function getAllByIdAuthor(int $idAuthor){
        return Announcements_from_companies::where('id_author',$idAuthor)->orderBy('created_at', 'desc')->get();
    }

    public function getById(int $id){
        return Announcements_from_companies::join('company_infos','announcements_from_companies.id_author','=','company_infos.id_company')
            ->select('announcements_from_companies.*','company_infos.phone_contact','company_infos.logo_src','company_infos.city','company_infos.company_name','company_infos.id_company')
            ->where('announcements_from_companies.id_course',$id)
            ->first();
    }

    public function update($id, array $newDetails)
    {
        // TODO: Implement update() method.
    }

    public function getAllCity(){
        return Announcements_from_companies::join('company_infos','announcements_from_companies.id_author','=','company_infos.id_company')
            ->select('company_infos.city')
            ->get();
    }

    public function getSort(array $type,array $city){
        return Announcements_from_companies::join('company_infos','announcements_from_companies.id_author','=','company_infos.id_company')
            ->select('announcements_from_companies.*','company_infos.phone_contact','company_infos.logo_src','company_infos.city','company_infos.company_name','company_infos.id_company')
            ->whereIn('announcements_from_companies.type',$type)
            ->whereIn('company_infos.city',$city)
            ->get();
    }
}
