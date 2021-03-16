<?php

namespace App\Http\Controllers\Surveys\SurveyAggregate;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DataToPopulateSurvey;
use App\Models\AvailableSurveys;
use App\Models\SurveyUserList;
use App\Models\SurveyList;
use App\Models\Questions;
use App\Models\Answers;

use App\Http\Controllers\Surveys\SurveyBuilder\QuestionAnswerCreator;
use App\Http\Controllers\Surveys\SurveyBuilder\SurveyCreator;
class DistributeSurvey
{
    private $request = null;
    private $AvailableSurveysDTO = null;
    private $DataToPopulateSurveysDTO = Array();
    private $QuestionsDTO = Array();
    private $AnswersDTO = Array();
    private $SurveyListDTO = Array();
    private $SurveyUserListDTO = null;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    //TODO: Should be its own class from validateSurveyStore -> $createSurveyUserListDTO


    public function create() {


        $result[0] = new SurveyCreator($this->request);
        $result[1] = new SurveyCreator($this->request);

        $result[0]->createSurvey();
        $result[1]->createSurvey();

        return $result;
    }

}
