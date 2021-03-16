<?php

namespace App\Http\Controllers\Surveys;

use App\Models\AppendixO;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AppendixOController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('dashboard/appendixO');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'inputAge' => 'required|max:255',
            'gender' => 'required|in:male,female',
            'inputHeight' => 'required|max:255',
            'inputWeight' => 'required|max:255',
            'inputOccupation' => 'required|max:255',
            'inputEmployment' => 'required|max:255',
            'chronic' => 'required|max:255'
        ]);

        $name = Auth::user()->name;

        $request->user()->appendixO()->create([ //chains the users post to a user
            'age' => $request->inputAge,
            'gender' => $request->gender,
            'height' => $request->inputHeight,
            'weight' => $request->inputWeight,
            'occupation' => $request->inputOccupation,
            'employment' => $request->inputEmployment,
            'chronic_conditions' => $request->chronic,
            'name'=> $name
            ]);

        return redirect()->route('dashboard');
    }

}
