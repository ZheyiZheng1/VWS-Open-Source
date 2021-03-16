<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['guest']);
    // }

    public function index()
    {
        return view('loginpage');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {

            return back()->with('status', 'Invalid login details');
        }


        return redirect()->route('dashboard');
    }

    public function indexresearcher()
    {
        return view('loginpageresearcher');
    }

    public function storeresearcher(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //FIXME: this authenticates participants and researchers. If a participant tries to sign-in it
        //will sign them in, then hit the controls tatements on 59-63 and kick them out saying they are not
        //an administrator which is confusing. The below should be changed to only allow admin users to login.
        $isNotAuthenticated = !auth()->attempt($request->only('email', 'password'), $request->remember);

        if ($isNotAuthenticated) {

            return back()->with('status', 'Invalid login details');
        }

        $isAdmin = auth()->user()->isAdmin();

        //This if statement ultimately shouldn't exist as-is
        if ($isAdmin) {

            return redirect()->route('dashboard');
        } else {
            return back()->with('status', 'You are not an administrator');
        }

    }
    
    //Next two function is for user profile page.
    public function showProfileData($id){
        //take data from database and pass to user profile page by using user id.
        $data = User::find($id);
        return view('userProfilePage',['data'=>$data]);
    }

    public function updateProfile(Request $req) {
        //take data that upload from user and update to database.
        $data = User::find($req->id);
        $data = User::find($req->id);
        $data->firstName=$req->firstName;
        $data->lastName=$req->lastName;
        $data->phone=$req->phone;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->city=$req->city;
        $data->zip=$req->zip;
        $data->country=$req->country;
        $data->save();
        return redirect('userProfilePage');
    }
}
