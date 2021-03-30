<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dashboard/index.css" />
    <link rel="stylesheet" href="/css/dashboard/sidebar.css" />
    <link rel="stylesheet" href="/css/dashboard/surveyrightbar.css" />
    <title>Create a New Survey</title>
</head>
<body>
    <div class="main">
        @section('leftsidebar')
            @include('dashboard.leftsidebar')
        @show
        <section class="right-panel">
            <h2>Good Morning {{auth()->user()->name}},</h2>
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
        </section>
    </div>
</body>
</html>
