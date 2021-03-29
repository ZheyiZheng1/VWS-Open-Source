<?php

namespace App\Http\Controllers\Surveys;

use App\Models\AppendixO;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Surveys\SurveyClass\SurveyRetriever;
use App\Http\Controllers\Surveys\SurveyBuilder\DistributeSurvey;

use App\models\User;
use App\models\Questions;
use App\models\Answers;
use App\models\AnswersRecorded;
use App\models\SurveyList;
use App\models\SurveyUserList;
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

        $questions = Questions::where('survey_id', $request->SurveyList)->get();
        $answers = [];
        foreach ($questions as $question) {
            $answers[] = Answers::where('questions_id', $question->id)->get();

        }
        return view('participantPortal/appendixS', compact('questions', 'answers'));
    }

    public function storeNewSurvey(Request $request) {

        for ($idx = 0; $idx < 10; $idx++) {
            if ($request["answer" . $idx]) {
                $surveyComplete = AnswersRecorded::create([
                    'answerValue' => $request["answer" . $idx],
                    'question_id' => $request["questionNumber" . $idx],
                    'participant_user_id' => Auth::user()->id
                ]);
            }
        }
        $SurveyUserListItem = SurveyUserList::find($request->SurveyList);
        if ($SurveyUserListItem) {
            $SurveyUserListItem['isCompleted'] = true;
            $SurveyUserListItem->save();
        }
        return redirect('participant-portal/available-surveys.html');
    }

    public function availableSurveys(Request $request)
    {
        if(strcmp($this->checkUserPermissions(), 'admin') === 0) return redirect()->route('dashboard');
        $surveyUserList = SurveyUserList::where([
            'user_id' => Auth::user()->id,
            'isCompleted' => false
        ])->get();
        $SurveysAvailable = [];
        foreach ($surveyUserList as $surveyUser) {
            $SurveysAvailable[] = SurveyList::where('id', $surveyUser->survey_id)->get();
        }

        $surveyUserList = SurveyUserList::where([
            'user_id' => Auth::user()->id,
            'isCompleted' => true
        ])->get();
        $SurveysCompleted = [];
        foreach ($surveyUserList as $surveyUser) {
            $SurveysCompleted[] = SurveyList::where('id', $surveyUser->survey_id)->get();
        }
        // dd($SurveysAvailable);
        return view('participantPortal/availableSurveys', compact('SurveysAvailable', 'SurveysCompleted'));
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
