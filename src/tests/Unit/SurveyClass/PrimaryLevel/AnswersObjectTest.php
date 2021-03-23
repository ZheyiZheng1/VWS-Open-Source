<?php

namespace Tests\Unit\SurveyClass\PrimaryLevel\AnswersObjectTest;

use App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel\SurveyListObject;
use App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel\QuestionsObject;
use App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel\AnswersObject;
use PHPUnit\Framework\TestCase;
class myFakeModel
{
    public function __construct() {}
    public static function create() {
        $instance = new self();
        $instance->updated_at = "01/01/2021";
        $instance->id = 1;
        return $instance;
    }

    public static function find() {
        return true;
    }
    public static function all() {
        return true;
    }
};
class AnswersObjectTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAnswersObjectCanCreateAFake()
    {
        $givenSurveyListObject = SurveyListObject::withSurveyNameProgramSD('Survey Name', '01/01/2021');
        $givenQuestions = new QuestionsObject("Question Description", $givenSurveyListObject);
        $given = new AnswersObject(1, $givenQuestions);

        $injectedClass = new myFakeModel();

        $whenSurveyListCalled = $givenSurveyListObject->create($injectedClass);
        $whenQuestionsCalled = $givenQuestions->create($injectedClass);
        $when = $given->create($injectedClass);
        $this->assertSame($when->updated_at, '01/01/2021');
        $this->assertSame($when->id, 1);
    }
}