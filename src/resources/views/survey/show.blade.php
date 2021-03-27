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
    <title>{{$survey -> title}}</title>
</head>
<body>
    <div class="main">
        @section('leftsidebar')
            @include('dashboard.leftsidebar')
        @show
        <section class="right-panel">
            <h2>Good Morning Researcher,</h2>
            <div class="survey-create card mt-4" >
                <div class="card-header">{{$survey -> title}}
                </div>
                <div class="card-body">
                    <div>
                        <a class="btn btn-dark" href="/surveys/questions/create?surveyId={{ $survey->id }}">Add New Question</a>
                        <a class="btn btn-dark" href="#">Add a Participant</a>
                    </div>
                    @foreach ($survey->questions as $question)
                    <div>
                        <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                            {{$question->question}}
                            </h3>
                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <ul class="divide-y divide-gray-200">
                                @foreach ($question->answers as $answer)
                                <li class="py-4 flex">
                                    {{$answer->answer}}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</body>
</html>
