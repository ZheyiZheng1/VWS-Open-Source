<?php

namespace App\Http\Controllers\Auth;

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
        if(count($user) > 0)
            //$user and $searchBar will be send back as variable $details and $query
            return view('searchUserPage')->withDetails($user)->withQuery ( $searchBar );
        else 
            return view ('searchUserPage')->withMessage('No such user found. Please try again !');
    }

    public function showProfileData($id){
        //take data from database and pass to searchedUserProfilePage by using user id.
        $data = User::find($id);
        //find all survey answers that related to this user.
        $survey_data = Answer::find($id);
        return view('searchedUserProfilePage', compact('data', 'survey_data'));
    }
}
