@extends('layouts.researcherlayout')
@section('title','Create a New Survey')
@section('content')
            <div class="survey-create card mt-4" >
                <div class="card-body">
                    <form action="{{route('storeSurvey')}}" method="post">
                        @csrf
                        <div class="form-group mb-4">
                            <label for="surveyName">Survey Name</label>
                            <input name="surveyName" type="text" class="form-control" id="surveyName" placeholder="Enter Survey name">
                            @error('surveyName')
                                <small class="text-danger">{{$message}}</small>
                            @enderror

                        </div>

                        <div class="form-group mb-4">
                            <label for="date">Program start date</label>
                            <input name="programdate" type="date" class="form-control" id="date" placeholder="Enter Start date">
                            @error('programdate')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="quarterly">How frequently should this be sent</label>
                            <input name="quarterly" type="text" class="form-control" id="quarterly">
                            @error('quarterly')
                            <small class="text-danger">{{$message}}</small>
                            @enderror

                        </div>
                          <button type="submit" class="btn btn-primary">Create Survey</button>
                    </form>
                </div>

            </div>
@endsection
