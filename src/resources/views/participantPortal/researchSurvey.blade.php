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

        <section class="right-panel" >
        <h1>Good Morning {{auth()->user()->name}},</h1>
        <br>
        <p>Here are a list of Surveys available</p>
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
                <tr>
                     <th scope="row">1</th>
                     <td>Appendix O</td>
                     <td>0</td>
                     <td>0%</td>
                     <td>06-03-2021</td>
                     <td><button type="edit" class="btn btn-success" style="width: 150px;">Edit</button></td>
                </tr>
                <tr>
                     <th scope="row">2</th>
                     <td>Appendix Q</td>
                     <td>0</td>
                     <td>0%</td>
                     <td>06-03-2021</td>
                     <td><button type="edit" class="btn btn-success" style="width: 150px;">Edit</button></td>
                </tr>
                <tr>
                     <th scope="row">3</th>
                     <td>Appendix R</td>
                     <td>0</td>
                     <td>0%</td>
                     <td>06-03-2021</td>
                     <td><button type="edit" class="btn btn-success" style="width: 150px;">Edit</button></td>
                </tr>
                <tr>
                     <th scope="row">4</th>
                     <td>Appendix S</td>
                     <td>0</td>
                     <td>0%</td>
                     <td>06-03-2021</td>
                     <td><button type="edit" class="btn btn-success" style="width: 150px;">Edit</button></td>
                </tr>
                <tr>
                     <th scope="row">5</th>
                     <td>Appendix T</td>
                     <td>0</td>
                     <td>0%</td>
                     <td>06-03-2021</td>
                     <td><button type="edit" class="btn btn-success" style="width: 150px;">Edit</button></td>
                </tr>
                <tr>
                     <th scope="row">6</th>
                     <td>Social Eating</td>
                     <td>0</td>
                     <td>0%</td>
                     <td>06-03-2021</td>
                     <td><button type="edit" class="btn btn-success" style="width: 150px;">Edit</button></td>
                </tr>
                <tr>
                     <th scope="row">7</th>
                     <td>Social Workout</td>
                     <td>0</td>
                     <td>0%</td>
                     <td>06-03-2021</td>
                     <td><button type="edit" class="btn btn-success" style="width: 150px;">Edit</button></td>
                </tr>
                <tr>
                     <th scope="row">8</th>
                     <td>Health Questionnaire</td>
                     <td>0</td>
                     <td>0%</td>
                     <td>06-03-2021</td>
                     <td><button type="edit" class="btn btn-success" style="width: 150px;">Edit</button></td>
                </tr>
            </tbody>
        </table>
        </section>
    </div>
</body>

</html>
