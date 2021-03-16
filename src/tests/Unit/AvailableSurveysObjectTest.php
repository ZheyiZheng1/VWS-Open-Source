<?php

namespace Tests\Unit;

use App\Http\Controllers\Surveys\SurveyClass\PrimaryLevel\AvailableSurveysObject;
use PHPUnit\Framework\TestCase;
class myFakeAvailableSurveysObjectModel
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
class AvailableSurveysObjectTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAnswersObjectCanCreateAFake()
    {
        $given = new AvailableSurveysObject("Survey Name", "Quarterly", "01/01/2020");

        $injectedClass = new myFakeModel();

        $when = $given->create($injectedClass);
        $this->assertSame($when->updated_at, '01/01/2021');
        $this->assertSame($when->id, 1);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAnswersObjectCanGetIdFromAFake()
    {
        $given = new AvailableSurveysObject("Survey Name", "Quarterly", "01/01/2020");

        $injectedClass = new myFakeModel();

        $when = $given->create($injectedClass);
        $this->assertSame($given->getId(), 1);
    }
}