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
    <title>{{$survey[0]->SurveyName}}</title>

</head>

<body>
    <div class="main">
        @section('leftsidebar')
            @include('participantPortal.leftsidebar')
        @show

        <section class="right-panel" >
            <form id='surveyForm' action="/participant-portal/available-surveys/index.html?SurveyList={{ $questions[0]->survey_id }}" method="post">
                @section('surveyAppendixS')
                    @include('participantPortal.surveys.surveyAppendixS')
                @show
            <button type="submit" class="btn btn-primary" style="width: 150px;">Submit</button>
            </form>
        </section>
    </div>
</body>

</html>
