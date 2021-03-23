<?php

namespace App\Http\Controllers\Surveys;

use App\Models\AppendixO;
use App\Models\ParticipantUser;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Surveys\SurveyClass\SurveyRetriever;
use App\Http\Controllers\Surveys\SurveyBuilder\DistributeSurvey;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Bouncer;

class ResearcherController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function checkUserPermissions($isAdmin, $isParticipant) {
        //This if statement ultimately shouldn't exist as-is
        if ($isAdmin) {
            return 'admin';
        } else if ($isParticipant) {
            return 'participant';
        } else {
            return 'superadmin';
        }
    }
    public function dashboard() {
        $isAdmin = Bouncer::is(Auth::user())->an('admin');
        $isParticipant = Bouncer::is(Auth::user())->an('participant');
        if(strcmp($this->checkUserPermissions($isAdmin, $isParticipant), 'participant') === 0) return redirect()->route('surveylisted');

        return view('dashboard.index');
    }

    public function store(Request $request)
    {
        $isAdmin = Bouncer::is(Auth::user())->an('admin');
        $isParticipant = Bouncer::is(Auth::user())->an('participant');
        if(strcmp($this->checkUserPermissions($isAdmin, $isParticipant), 'participant') === 0) return redirect()->route('surveylisted');

        $this->validate($request, [
            'inputAge' => 'required|max:255',
            'gender' => 'required|in:male,female',
            'inputHeight' => 'required|max:255',
            'inputWeight' => 'required|max:255',
            'inputOccupation' => 'required|max:255',
            'inputEmployment' => 'required|max:255',
            'chronic' => 'required|max:255'
        ]);

        AppendixO::create([
            'age' => $request->inputAge,
            'gender' => $request->gender,
            'height' => $request->inputHeight,
            'weight' => $request->inputWeight,
            'occupation' => $request->inputOccupation,
            'employment' => $request->inputEmployment,
            'chronic_conditions' => $request->chronic,
        ]);

        return redirect()->route('dashboard');
    }
    public function researchSurvey(Request $request)
    {
        $isAdmin = Bouncer::is(Auth::user())->an('admin');
        $isParticipant = Bouncer::is(Auth::user())->an('participant');
        if(strcmp($this->checkUserPermissions($isAdmin, $isParticipant), 'participant') === 0) return redirect()->route('surveylisted');

        $SurveyRetriever = new SurveyRetriever(1);
        $retrievedSurveyInfo = $SurveyRetriever->displaySurveyList();
        return view("dashboard.researchSurvey", ['SurveysAvailable' => $retrievedSurveyInfo]);
    }

    public function availableSurveys(Request $request)
    {
        $isAdmin = Bouncer::is(Auth::user())->an('admin');
        $isParticipant = Bouncer::is(Auth::user())->an('participant');
        if(strcmp($this->checkUserPermissions($isAdmin, $isParticipant), 'participant') === 0) return redirect()->route('surveylisted');

        $SurveyRetriever = SurveyRetriever::withEmptyConstructor();
        $completedSurveys = $SurveyRetriever->displaySurveyUserList();

        return view('participantPortal/availableSurveys', ['SurveysAvailable' => $completedSurveys]);
    }

    public function showDistributeSurvey() {
        $isAdmin = Bouncer::is(Auth::user())->an('admin');
        $isParticipant = Bouncer::is(Auth::user())->an('participant');
        if(strcmp($this->checkUserPermissions($isAdmin, $isParticipant), 'participant') === 0) return redirect()->route('surveylisted');
        $participants = ParticipantUser::all();
        return view('dashboard.distributeSurvey', ["participants"=>$participants]);
    }

    public function DistributeSurveyStore(Request $request) {

        $isAdmin = Bouncer::is(Auth::user())->an('admin');
        $isParticipant = Bouncer::is(Auth::user())->an('participant');
        if(strcmp($this->checkUserPermissions($isAdmin, $isParticipant), 'participant') === 0) return redirect()->route('surveylisted');

        //Validate the data
        $this->validateSurveyStore($request);

        $DistributionSurvey = new DistributeSurvey($request);

        //Create the DistributionList for the survey
        $DistributionSurvey->create();

        return redirect()->route('dashboard');
    }

    public function surveyAssigning(Request $request)
    {
        $isAdmin = Bouncer::is(Auth::user())->an('admin');
        $isParticipant = Bouncer::is(Auth::user())->an('participant');
        if(strcmp($this->checkUserPermissions($isAdmin, $isParticipant), 'participant') === 0) return redirect()->route('surveylisted');
        $participants = ParticipantUser::all();

        return view("dashboard.surveyAssigning",["participants"=>$participants]);
    }



    private function validateSurveyStore($request) {
        //TODO: add more questions (they should go up to 9 for current default values)
        $this->validate($request, [
            'surveyName' => 'required|max:255',
            'deliveryfrequency' => 'required|max:255',
            'programstartdate' => 'required|date',
            'chooseSurvey' => 'required|max:255',
            'participantOne' => 'required|max:255',
            'participantTwo' => 'required|max:255',
            'participantThree' => 'required|max:255',
            'participantFour' => 'required|max:255',
            'participantFive' => 'required|max:255',
            'questionOne' => 'required|max:255',
            'questionTwo' => 'required|max:255',
            'questionThree' => 'required|max:255',
            'questionFour' => 'required|max:255',
            'questionFive' => 'required|max:255',
            'questionOneLikert' => 'required|max:255',
            'questionTwoLikert' => 'required|max:255',
            'questionThreeLikert' => 'required|max:255',
            'questionFourLikert' => 'required|max:255',
            'questionFiveLikert' => 'required|max:255'
        ]);

        return true;
    }


}
