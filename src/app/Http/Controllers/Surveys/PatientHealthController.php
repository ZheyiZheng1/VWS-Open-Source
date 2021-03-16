<?php

namespace App\Http\Controllers\Surveys;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientHealthController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('participantPortal/surveys/surveyHealth');
    }
}
