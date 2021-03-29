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
            <div class="card">
                <div class="card-body">
                    <!--update the link for generate survey and generate report-->
                    <h5 class="card-title">{{ $user->name }}</h5>
                </div>
            </div>

            <div class="container">
                <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Questions</th>
                            <th>Answers</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!--show all questions and answers, for each pair question and answer, create a new row for table-->
                            @for ($i = 0; $i< count($questions); $i++)
                            <tr>
                                <td>{{ $questions_alt[$i]->question }}</td>
                                <td>{{ $questions[$i][0]->answerValue }}</td>
                            </tr>
                            @endfor
                        </tbody>
                </table>
                </div>
            </div>
        </section>
    </div>


</body>

</html>
