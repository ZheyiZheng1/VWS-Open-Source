<?php

namespace Tests\Unit\SurveyClass\PrimaryLevel\QuestionAnswerCreatorTest;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use App\Http\Controllers\Surveys\SurveyClass\QuestionAnswerCreator;
use App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel\SurveyListObject;
use PHPUnit\Framework\TestCase;

class MySurveyListFakeModel
{
    public $SurveyListObject = ["id" => 1];
    public function __constructor() {
        $this->SurveyListObject = SurveyListObject::withSurveyListId(1);
    }
    public static function create() {
        $instance = new self();
        return $instance;
    }

    public static function find() {
        return true;
    }
    public static function all() {
        return true;
    }
    public function getId() {
        return 1;
    }
};

class QuestionAnswerCreatorTest extends TestCase
{
    private $parameters = [
        "surveyName" => "Survey Name",
        "deliveryFrequency" => "Delivery Frequency",
        "programstartdate" => "01/01/2021",
        "chooseSurvey" => "One of 8 Choices",
        "questionOne" => "First Question Description",
        "questionTwo" => "First Question Description",
        "questionThree" => "First Question Description",
        "questionFour" => "First Question Description",
        "questionFive" => "First Question Description",
        "questionSix" => "First Question Description",
        "questionSeven" => "First Question Description",
        "questionEight" => "First Question Description",
        "questionNine" => "First Question Description",
        "questionOneLikert" => "First Question Description",
        "questionTwoLikert" => "First Question Description",
        "questionThreeLikert" => "First Question Description",
        "questionFourLikert" => "First Question Description",
        "questionFiveLikert" => "First Question Description",
        "questionSixLikert" => "First Question Description",
        "questionSevenLikert" => "First Question Description",
        "questionEightLikert" => "First Question Description",
        "questionNineLikert" => "First Question Description",
        "participantOne"    => "First Name",
        "participantTwo"    => "First Name",
        "participantThree"    => "First Name",
        "participantFour"    => "First Name",
        "participantFive"    => "First Name"];
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testQuestionAnswerCreatorCanCreateAFake()
    {
        $request = new \Illuminate\Http\Request;
        $newRequest = $request->createFromBase(
                \Symfony\Component\HttpFoundation\Request::create(
                    $uri = "/test",
                    $method = "GET",
                    $parameters = $this->parameters,
                    $cookies = [],
                    $files = [],
                    $server = ['CONTENT_TYPE' => 'application/json'],
                    $content = ""
                )
            );
        $given = new QuestionAnswerCreator($newRequest);

        $injectFake = new MySurveyListFakeModel();

        $when = $given->createSurvey($injectFake, $injectFake, $injectFake, $injectFake);
        $this->assertTrue($when);
    }
}