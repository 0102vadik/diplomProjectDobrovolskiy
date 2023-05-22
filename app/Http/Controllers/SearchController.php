<?php

namespace App\Http\Controllers;

use App\Models\Announcements_from_companies;
use App\Post;
use App\Services\StudentService\StudentsService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchForStudent(Request $request){
        $searchResults = Announcements_from_companies::join('company_infos','announcements_from_companies.id_author','=','company_infos.id_company')
            ->select('*')
            ->where('announcements_from_companies.expectation_date','>=',Carbon::today())
            ->where( 'announcements_from_companies.header', 'like', '%' . $request->search . '%' )
            ->orWhere( 'announcements_from_companies.description', 'like', '%' . $request->search . '%' )
            ->orWhere( 'company_infos.company_name', 'like', '%' . $request->search . '%' )
            ->orWhere( 'company_infos.description', 'like', '%' . $request->search . '%' )
            ->orWhere( 'announcements_from_companies.type', 'like', '%' . $request->search . '%' )
            ->orWhere( 'announcements_from_companies.expectation_date', 'like', '%' . $request->search . '%' )
            ->orderBy( 'announcements_from_companies.expectation_date', 'desc' )->get();
        return view('pages.home', [
            'arrayAnnouncements' => $searchResults
        ]);
    }

    public function searchForCompany(Request $request){
        $studentsService = new StudentsService();
        if ($request->search == null){
            return view('pages.home', [
                'arrayObject' => $studentsService->getStudents()
            ]);
        }
        return view('pages.home', [
            'arrayObject' => $studentsService->getStudentBySearch($request->search)
        ]);
    }
}
