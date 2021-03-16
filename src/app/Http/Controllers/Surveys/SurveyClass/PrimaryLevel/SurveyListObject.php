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

class SurveyListObject //implements IDTO
{
    private $request = null;
    private $SurveyListObject = null;

    public function __construct() {}

    public static function withSurveyNameProgramSD(String $surveyName, String $programStartDate)
    {
        $instance = new self();
        $instance->surveyName = $surveyName;
        $instance->programStartDate = $programStartDate;
        return $instance;
    }

    public static function withSurveyListId(Int $SurveyListId) {
        $instance = new self();
        $instance->SurveyListId = $SurveyListId;
        return $instance;
    }

    public function display($SurveyList) {
        $this->SurveyListObject = $SurveyList::find($this->SurveyListId);
        return $this->SurveyListObject;
    }

    public function displayAll($SurveyList) {
        $this->SurveyListObject = $SurveyList::all();
        return $this->SurveyListObject;
    }

    public function create(Object $SurveyList) {

        $now = date('Y-m-d H:i:s') . '';

        $this->SurveyListObject = $SurveyList::create([
            'SurveyName' => $this->surveyName,
            'created_at' => $now,
            'DeliveryDate' => $this->programStartDate, // FIXME: This only works for the first program, should be calculated
        ]);
        return $this->SurveyListObject;
    }

    public function getId() {
        return $this->SurveyListObject->id;
    }
}
