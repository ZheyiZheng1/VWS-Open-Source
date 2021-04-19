@extends('layouts.researcherlayout')
@section('title','Search')
@section('content')
            <div class="card">
                <div class="card-body">
                    <!--update the link for generate survey and generate report-->
                    <h5 class="card-title">{{$user_id[0]->name}}</h5>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-between"><!--make sure these two columns are in same row-->
                    <div class="col-6"><!--define the size of columns-->
                    <div class="card"><!--create card inside column-->
                        <div class="card-body">
                            <h5 class="card-title">Completed Surveys</h5>
                            <!--List all completed surveys with completed date using table-->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Survey Name</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <!--loop through all completed survey, one survey as on row in table-->
                                    @foreach ($survey_datas_A as $survey_data_A)
                                    <tr>
                                        <!--use survey_id and user_id to create link and load user answers-->
                                        <td><a href="{{ route('find_user_answer', ['id' => $user_id[0]->name, 'survey_id' => $survey_data_A->survey_id ]) }}">{{$survey_data_A->survey_id}}</a></td>
                                        <td><a href="{{ route('find_user_answer', [$user_id[0]->name, $survey_data_A->survey_id ]) }}">{{ $survey_data_A->updated_at }}</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>

                    <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Not Completed Surveys</h5>
                            <!--List all uncompleted surveys with assigned date using table-->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Survey Name</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($survey_datas_B as $survey_data_B)
                                    <tr>
                                        <td>{{ $survey_data_B->survey_id }}</td>
                                        <td>{{ $survey_data_B->updated_at }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
@endsection
