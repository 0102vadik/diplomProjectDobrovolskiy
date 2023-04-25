<?php

namespace App\Http\Controllers;

use App\Services\AnnouncementsService\AnnouncementsService;
use App\Services\StudentService\StudentsService;
use Illuminate\Http\Request;

class SortController extends Controller
{
    protected AnnouncementsService $announcementsService;
    protected StudentsService $studentsService;

    public function __construct()
    {
        $this->announcementsService = new AnnouncementsService();
        $this->studentsService = new StudentsService();
    }

    public function sortAnnouncements(Request $request){
        return view('pages.home', [
            'arrayAnnouncements' => $this->announcementsService->getAnnoncementsSort($request->type,$request->city)
        ]);
    }

    public function sortStudents(Request $request){
       return view('pages.home', [
            'arrayObject' => $this->studentsService->getStudentsSort($request->place,$request->specialization,$request->salary,$request->schedule)
        ]);
    }
}
