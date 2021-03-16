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

    public function __construct(Int $authId, Int $AvailableSurveysID, String $ProgramStartDate)
    {
        $this->authId = $authId;
        $this->AvailableSurveysID = $AvailableSurveysID;
        $this->ProgramStartDate = $ProgramStartDate;
    }

    public function create($SurveyUserList) {

        $this->SurveyUserListObject = $SurveyUserList::create([
            'updated_at' => date('Y-m-d H:i:s') . '',
            'isCompleted' => false,
            'user_id' => $this->authId,
            'survey_id' => $this->AvailableSurveysID,
            'ProgramStartDate' => $this->ProgramStartDate
        ]);

        return $this->SurveyUserListObject;

    }
}
