<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS ORDER MATTERS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dashboard/index.css" />
    <link rel="stylesheet" href="/css/dashboard/sidebar.css" />
	<link rel="stylesheet" href="/css/dashboard/surveyrightbar.css" />

	<script src="https://kit.fontawesome.com/555936ed9c.js" crossorigin="anonymous"></script>
    <title>Search</title>

</head>

<body>


    <div class="main">
        @section('leftsidebar')
            @include('dashboard.leftsidebar')
        @show

        <section class="right-panel" >
            <h1>Good Morning Researcher,</h1>
            <br>
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

        </section>
    </div>


</body>

</html>
