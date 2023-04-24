<?php

namespace App\Http\Controllers;

use App\Services\AnnouncementsService\AnnouncementsService;
use App\Services\CompanyService\CompanyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnouncementsController extends Controller
{
    protected AnnouncementsService $announcementsService;
    protected CompanyService $companyService;

    public function __construct()
    {
        $this->announcementsService=new AnnouncementsService();
        $this->companyService = new CompanyService();
    }

    public function sandApplication(Request $request){
        $this->announcementsService->sandAnnouncements($request->description,Auth::id(),$request->header,$request->expirationDate,$request->type);
        return redirect()->to(route('my-applications'));
    }

    public function pageMyAnnouncements(){
        return view('pages.my-application',
            [
                'informationAnnouncements' => $this->announcementsService->getAnnouncementsUser()->reverse(),
                'object' => $this->companyService->getCompanyById()
            ]);
    }

    public function deleteAnnouncements(Request $request){
        print_r($request->id);
        $this->announcementsService->deleteAnncouncement($request->id);
        return redirect()->to(route('my-applications'));
    }

    public function moreInfo(Request $request){
        return view('pages.application-more',[
            'information'=> $this->announcementsService->getById($request->id)
        ]);
    }
}
