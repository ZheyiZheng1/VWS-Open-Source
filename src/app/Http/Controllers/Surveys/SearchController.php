<?php

namespace App\Http\Controllers\Surveys;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;

class SearchController extends Controller
{

    public function index()
    {
        return view('searchUserPage');
    }

    public function search()
    {
        //Search for correct participants' data and pass back to searchUserPage.
        $searchBar = Input::get ( 'searchBar' );
        $user = User::where('firstName','LIKE','%'.$searchBar.'%')->orWhere('lastName','LIKE','%'.$searchBar.'%')->orWhere('email','LIKE','%'.$searchBar.'%')->get();
        dd($user);
        if(count($user) > 0)
            //$user and $searchBar will be send back as variable $details and $query
            return view('searchUserPage')->withDetails($user)->withQuery($searchBar);
        else 
            return view ('searchUserPage')->withMessage('No such user found. Please try again !');
    }

    public function showProfileData($id){
        //take data from database and pass to searchedUserProfilePage by using user id.
        $data = User::find($id);
        //find all survey that related to this user and completed, save to survey_datas_A.
        $survey_datas_A = $data->SurveyUserList_GetList()->where('isCompleted','ture')->get();
        //find all survey that related to this user and not completed, save to survey_datas_B.
        $survey_datas_B = $data->SurveyUserList_GetList()->where('isCompleted','fales')->get();
        return View::make('searchedUserProfilePage')->with('data', $data)->with('survey_datas_A', $survey_datas_A)->with('survey_datas_B', $survey_datas_B);
    }

    public function showAnswerData($id, $survey_id){
        //use user_id find user.
        $data = User::find($id);
        //find all questions. Select all descriptions, join SurveyUserList and Questions on survey_id, where user_id = $id and .
        $questions = DB::table('Questions')
            ->select('Description')
            ->join('SurveyUserList','survey_id','=','survey_lists_id')
            ->where('user_id','=','$id')
            ->where('survey_id','=','$survey_id')
            ->get();
        //find all answers. Select all answerValues, join Questions and question_id = question_id, where participant_user_id = $id and question_id = $survey_id.
        $answers = DB::table('Answers')
            ->select('answerValue')
            ->join('Questions','question_id','=','question_id')
            ->where('participant_user_id','=','$id')
            ->where('survey_lists_id','=','$survey_id')
            ->get();
        return View::make('specificAnswerPage')->with('data', $data)->with('questions', $questions)->with('answers', $answers);
    }
}
