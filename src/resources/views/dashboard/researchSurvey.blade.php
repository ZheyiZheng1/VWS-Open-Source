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
    <title>Researcher Survey Page</title>

</head>

<body>
    <div class="main">
        @section('leftsidebar')
            @include('dashboard.leftsidebar')
        @show

        <section class="right-panel">
        <h2>Good Morning Researcher,</h2>
        <br>
        <p>Here are a list of Surveys available</p>
        <div class="ml-auto"><a href="{{route('createSurvey')}}" class="btn btn-success" style="width: 250px;">Create New Survey</a></div>
        <div class="table-section"> <!--table-->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
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
                         <th scope="row">1</th>
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
        </section>
    </div>
</body>

</html>
