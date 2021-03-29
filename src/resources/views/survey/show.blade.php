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
            <div>
                <a class="btn btn-dark" href="/surveys/questions/create?surveyId={{ $survey->id }}">Add New Question</a>
                <a class="btn btn-dark" href="/surveys/participants/create?surveyId={{ $survey->id }}">Add a Participant</a>
            </div>
            <div class="survey-create card mt-4">
                    @if (session('alert'))
                        <div class="alert alert-success my-2">
                            {{ session('alert') }}
                        </div>
                    @endif
                <div class="card-header">Questions</div>
                    <div class="card-body">
                        @foreach ($survey->questions as $question)
                            <div class="mt-2 card">
                                <div class="card-header d-flex flex-row justify-content-between">
                                    <h5>{{$question->question}}</h5>
                                        @if ($question->type === 'radio')
                                            <p>Multiple Choice</p>
                                        @endif
                                        @if ($question->type === 'text')
                                            <p>Text Field</p>
                                        @endif
                                        @if ($question->type === 'range')
                                            <p>Likert Scale</p>
                                        @endif
                                </div>
                                <div class="card-body">
                                    <ul class="list-group" style="list-style-type:none">
                                        @foreach ($question->answers as $answer)
                                        <li class="ml-2">
                                            {{$answer->answerValue}}
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="card-footer">
                                    <form action="/surveys/{{$survey->id}}/questions/{{$question->id}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-small btn-outline-danger" type="submit">Remove Question</button>
                                    </form>
                                </div>
                            </div>
                    @endforeach
                    </div>

               </div>
               <div class="survey-create card mt-2">
                    <div class="card-header">Participants</div>
                        <div class="card-body">
                            @foreach ($surveyUserList as $user)
                                <div>{{$user->name}}</div>
                            @endforeach
                            <div class="mt-2">{{ $surveyUserList->links() }}</div>
                        </div>
                </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(".alert").delay(2000).slideUp(200, function () {
            $(this).alert('close');
        });
    </script>
</body>
</html>
