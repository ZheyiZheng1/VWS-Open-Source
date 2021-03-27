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
            <form action="/surveys/questions?surveyId={{$survey->id}}" method="POST">
                <div class="survey-create card mt-4" id="question1">
                    <div class="card-header">
                        Create a new question
                    </div>
                    <div class="card-body">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="question">Enter Question</label>
                                <input name="question" type="text" class="form-control" id="question" placeholder="Enter Question"
                                value="{{ old('question') }}">

                                @error('question.question')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                    <label for="question-type">Select question type</label>
                                    <select class="form-control" name="questionType" id="prefs" onchange="javascript:prefValue()">
                                    <option value="radio">Multiple Choice</option>
                                    <option value="text">Text/Number</option>
                                    <option value="range">Likert Scale</option>
                                    </select>
                            </div>
                            <div class="form-group mb-2 likert-choice" style="display: none;">
                                <label for="likert">Enter Likert value</label>
                                <input name="likertScaleAnswer" type="number" class="form-control" placeholder="Enter Likert Value">

                                @error('likertScaleAnswer')
                                <small class="text-danger">{{$message}}</small>
                                @enderror

                            </div>
                            <div class="form-group mb-2 yesno-choice" style="display: block;">
                                <fieldset>
                                    <legend>Choices</legend>
                                        <div>
                                            <div class="form-group">
                                                <label for="answer1">Choice 1</label>
                                                <input name="choiceOne" type="text"
                                                class="form-control" id="answer1" aria-describedby="choicesHelp"
                                                placeholder="Enter Choice 1" />

                                                @error('choiceOne')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                </div>
                                            </div>

                                            <div>
                                                <div class="form-group">
                                                <label for="answer2">Choice 2</label>
                                                <input name="choiceTwo" type="text"
                                                class="form-control" id="answer2"
                                                aria-describedby="choicesHelp" placeholder="Enter Choice 2" />

                                                @error('choiceTwo')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                </fieldset>
                            </div>
                            <input class="text-choice" type="input" name="textChoice" style="display: none;" value="">
                        </div>
                    </div>
                <div id="question_types">
                    <button type="submit" class="btn btn-dark">Add Question</button>
                </div>
            </form>
        </section>
    </div>
    <script>

        const prefValue = function() {
            let optionSelected = document.getElementById('prefs').value;
            if(optionSelected === 'range') rangeFunction();
            if(optionSelected === 'radio') radioFunction();
            if(optionSelected === 'text') textFunction();
        }

        function rangeFunction() {
            let choices = document.getElementById('question1');
            choices.children[1].children[3].setAttribute("style", "display: block;");
            choices.children[1].children[4].setAttribute("style", "display: none;");
            choices.children[1].children[5].setAttribute("style", "display: none;");
        }

        function radioFunction() {
            let choices = document.getElementById('question1');
            choices.children[1].children[3].setAttribute("style", "display: none;");
            choices.children[1].children[4].setAttribute("style", "display: block;");
            choices.children[1].children[5].setAttribute("style", "display: none;");
        }

        function textFunction() {
            let choices = document.getElementById('question1');
            choices.children[1].children[3].setAttribute("style", "display: none;");
            choices.children[1].children[4].setAttribute("style", "display: none;");
            choices.children[1].children[5].setAttribute("style", "display: block;");
        }
    </script>
</body>
</html>
