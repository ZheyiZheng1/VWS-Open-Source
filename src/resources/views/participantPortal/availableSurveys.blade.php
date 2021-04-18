@extends('layouts.researcherlayout')
@section('title','Welcome to VWS')
@section('content')
        <p>Here are a list of Surveys available</p>

        <div class="complete">
            <h2>Completed Surveys</h2>
            <div class="completeRow">
            @foreach($SurveysCompleted as $Survey)
            <div class="incompleteRow">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $SurveysCompleted[$loop->index][0]->SurveyName }}</h5>
                            <p class="card-text">You have completed this survey.</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            </div>
        </div>

        <div class="incomplete mt-2">
            <h2>Not Completed Surveys</h2>
            @foreach($SurveysAvailable as $Survey)
            <div class="incompleteRow mt-2">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $SurveysAvailable[$loop->index][0]->SurveyName }}</h5>
                            <p class="card-text">Click the button below to start the survey</p>
                            <a href="{{ route('RetrieveSurvey', ['SurveyList' => $SurveysAvailable[$loop->index][0]->id]) }}" class="btn btn-primary">Start Survey</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
 @endsection
