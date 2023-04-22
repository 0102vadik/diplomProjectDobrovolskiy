<?php

namespace App\Http\Controllers\Profile;

use App\Contracts\IRepositories;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateStudentPostRequest;
use App\Services\CompanyService\Repositories\CompanyRepositories;
use App\Services\StudentService\Repositories\StudentLanguagesRepositories;
use App\Services\StudentService\Repositories\StudentRepositories;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use function Sodium\add;

class MyProfileController extends Controller
{
    protected StudentRepositories $studentRepositories;
    protected CompanyRepositories $companyRepositories;

    protected StudentLanguagesRepositories $studentLanguagesRepositories;

    public function __construct(StudentRepositories $studentRepositories, CompanyRepositories $companyRepositories,StudentLanguagesRepositories $studentLanguagesRepositories)
    {
        $this->companyRepositories = $companyRepositories;
        $this->studentRepositories = $studentRepositories;
        $this->studentLanguagesRepositories = $studentLanguagesRepositories;
    }

    public function indexStudents(): Factory|View|Application
    {
        return view('pages.my-profile', [
            'information' => $this->studentRepositories->getStudentsById(Auth::id())
        ]);
    }

    public function indexCompany(): Factory|View|Application
    {
        return view('pages.my-profile', [
            'information' => $this->companyRepositories->getCompanyById(Auth::id())
        ]);
    }

    public function updateProfileStudent(Request $request){
        if ( $request->file( 'imgAvatar' ) ) {
            $path      = Storage::putFile( 'public', $request->file( 'imgAvatar' ) );
            $url       = Storage::url( $path );
            $this->studentRepositories->updatePhoto(Auth::id(),$url);
        }
        $this->studentRepositories->updateStudent(Auth::id(),$request->toArray());
        if($request->programmingLanguages !== null)
            $this->studentLanguagesRepositories
                ->updateStudentLanguage($request->programmingLanguages);
        return redirect('/my-profile');
    }

    public function updateProfileCompany(Request $request){
        if ( $request->file( 'imgLogo' ) ) {
            $path      = Storage::putFile( 'public', $request->file( 'imgLogo' ) );
            $url       = Storage::url( $path );
            $this->companyRepositories->updateLogo(Auth::id(),$url);
        }
        $this->companyRepositories->updateCompany(Auth::id(),$request->toArray());
        return redirect('/my-profile');
    }
}
