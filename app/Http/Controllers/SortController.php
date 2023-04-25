<?php

namespace App\Http\Controllers;

use App\Services\AnnouncementsService\AnnouncementsService;
use Illuminate\Http\Request;

class SortController extends Controller
{
    protected AnnouncementsService $announcementsService;

    public function __construct()
    {
        $this->announcementsService = new AnnouncementsService();
    }

    public function sortAnnouncements(Request $request){
        return view('pages.home', [
            'arrayAnnouncements' => $this->announcementsService->getAnnoncementsSort($request->type,$request->city)
        ]);
    }
}
