<?php

namespace App\Http\Controllers\Surveys;

use App\Models\AppendixO;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Surveys\SurveyClass\SurveyRetriever;
use App\Http\Controllers\Surveys\SurveyBuilder\DistributeSurvey;

use App\models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Bouncer;

class ParticipantController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function checkUserPermissions() {
        $isAdmin = Bouncer::is(Auth::user())->an('admin');
        $isParticipant = Bouncer::is(Auth::user())->an('participant');

        //This if statement ultimately shouldn't exist as-is
        if ($isAdmin) {
            return 'admin';
        } else if ($isParticipant) {
            return 'participant';
        } else {
            return 'superadmin';
        }
    }

    public function index(Request $request)
    {
        if(strcmp($this->checkUserPermissions(), 'admin') === 0) return redirect()->route('dashboard');

        $SurveyRetriever = new SurveyRetriever($request['SurveyList']);
        $retrievedSurveyInfo = $SurveyRetriever->displaySurvey();

        for ($idx = 0; $idx < count($retrievedSurveyInfo); $idx++) {
            // dd($retrievedSurveyInfo[$idx]);
            $questions[$idx] = $retrievedSurveyInfo[$idx]->QuestionDescription;
        }

        return view('participantPortal/appendixS', ['questions' => $questions]);
    }

    public function availableSurveys(Request $request)
    {
        if(strcmp($this->checkUserPermissions(), 'admin') === 0) return redirect()->route('dashboard');
        $SurveyRetriever = SurveyRetriever::withEmptyConstructor();
        $completedSurveys = $SurveyRetriever->displaySurveyUserList();

        return view('participantPortal/availableSurveys', ['SurveysAvailable' => $completedSurveys]);
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
