<?php

namespace App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DataToPopulateSurvey;
use App\Models\AvailableSurveys;
use App\Models\SurveyUserList;
use App\Models\SurveyList;
use App\Models\Questions;
use App\Models\Answers;

use App\Http\Controllers\Surveys\SurveyClass\IDTO;

class SurveyUserListObject //implements IDTO
{
    private $request = null;
    private $SurveyUserListObject = null;

    public function __construct()
    {
    }

    public static function withAuthIdAvailableSurveysIdProgramStartDate(Int $authId, Int $AvailableSurveysID, String $ProgramStartDate)
    {
        $instance = new self();
        $instance->authId = $authId;
        $instance->AvailableSurveysID = $AvailableSurveysID;
        $instance->ProgramStartDate = $ProgramStartDate;
        return $instance;
    }

    public static function withUserId(Int $userId) {
        $instance = new self();
        $instance->userId = $userId;
        return $instance;
    }

    public function create($SurveyUserList, $participant) {

        $this->SurveyUserListObject = $SurveyUserList::create([
            'updated_at' => date('Y-m-d H:i:s') . '',
            'isCompleted' => false,
            'user_id' => $participant,
            'survey_id' => $this->AvailableSurveysID,
            'ProgramStartDate' => $this->ProgramStartDate
        ]);

        return $this->SurveyUserListObject;

    }

    public function displaySurveyUserList($modelSurveyUserList) {

        $this->SurveyUserListObject = $modelSurveyUserList::where('user_id', $this->userId)->get();

        return $this->SurveyUserListObject;
    }
}
