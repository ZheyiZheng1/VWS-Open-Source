@extends('layouts.researcherlayout')
@section('title','Researcher Survey Page')
@section('content')
        <p>Here are a list of Surveys available</p>
        <div class="ml-auto"><a href="{{route('createSurvey')}}" class="btn btn-success" style="width: 250px;">Create New Survey</a></div>
        <div class="table-section"> <!--table-->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Surveys</th>
                        <th scope="col">Responses</th>
                        <th scope="col">Completion Rate</th>
                        <th scope="col">Program Date</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                @foreach($SurveysAvailable as $Survey)
                    <tr>
                         <td>{{ $Survey['SurveyName'] }}</td>
                         <td>0</td>
                         <td>0%</td>
                         <td>{{ $Survey['DeliveryDate'] }}</td>
                         <td> <a class="btn btn-success" style="width: 150px;" href="/surveys/{{$Survey['id']}}">View</a>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
