@extends('layouts.researcherlayout')
@section('title','Search')
@section('content')
            <!--Form for text bar and "search for a patient" button-->
            <form id='surveyForm' action="{{route('searchForUser')}}" method="post">
                {{ @csrf_field() }}
                <input type='text' id='searchBar' name='searchBar' placeholder='Please enter an user name.' style="width: 300px;">
                <button type="submit" class="btn btn-primary" style="width: 200px;">Search For a participant</button>
            </form>
            <br>
            <!--Table for search results-->
            <div class="container">
                @if(isset($details))
                    <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($details as $user)
                        <form action="/dashboard/searchedUserProfilePage?id={{$user->id}}" method="POST" >
                        {{ @csrf_field() }}
                        <tr>
                            <!-- '$loop->index' The index of the current loop iteration (starts at 0 and only avilable inside the loop).-->
                            <td>{{$loop->index}}</td>
                            <td><button type="submit">{{$user->name}}</button></td>
                        </tr>
                        </form>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
@endsection
