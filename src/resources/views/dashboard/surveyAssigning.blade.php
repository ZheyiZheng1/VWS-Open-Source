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
    <title>Survey Assignment</title>

</head>

<body>
    <div class="main">
        @section('leftsidebar')
            @include('dashboard.leftsidebar')
        @show

        <section class="right-panel" >
        <h1>Good Morning {{auth()->user()->name}},</h1>
        <br>
        <div class="surveyDescription">
            <h2>Appendix R - Survey</h2>
            <p>Survey Discription</p>
        </div>

        <div class="completedSurvey">
            <h2>Completed Survey</h2>
            <ul class="list-group">
                 <li class="list-group-item">User 1 - 06/03/2021</li>
                 <li class="list-group-item">User 2 - 06/03/2021</li>
                 <li class="list-group-item">User 3 - 06/03/2021</li>
                 <li class="list-group-item">User 4 - 06/03/2021</li>
                 <li class="list-group-item">User 5 - 06/03/2021</li>
            </ul>
        </div>

        <div class="incompletedSurvey">
            <h2>Not Completed Survey</h2>
            <ul class="list-group">
                 <li class="list-group-item">User 1 - 06/03/2021</li>
                 <li class="list-group-item">User 2 - 06/03/2021</li>
                 <li class="list-group-item">User 3 - 06/03/2021</li>
                 <li class="list-group-item">User 4 - 06/03/2021</li>
                 <li class="list-group-item">User 5 - 06/03/2021</li>
            </ul>
        </div>

        <div class="addParticipant">
            <h2>Add a Participant</h2>
            <div class="input-group mb-3">
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Select Participant</option>
                    @foreach ($participants as $participant)
                        <option value="{{$participant['id']}}">{{$participant["name"]}}</option>
                    @endforeach
                </select>
            </div>
            <button type="button" class="btn btn-success">Add Participant</button>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
            <script>



            </script>
        </div>
        </section>
    </div>
</body>

</html>
