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
                <div class="card-header">Create a new question
                </div>
                <div class="card-body">
                    <form action="/surveys/{{$survey->id}}/questions" method="POST">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="question">Enter Question</label>
                            <input name="question[question]" type="text" class="form-control" id="question" placeholder="Enter Question"
                            value="{{ old('question.question') }}">

                            @error('question.question')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                            <div class="form-group mb-2">
                                    <label for="question-type">Select question type</label>
                                    <select class="form-control" name="question[type]" id="prefs" onchange="prefValue()">
                                      <option value="radio">Multiple Choice</option>
                                      <option value="text">Text/Number</option>
                                      <option value="range">Likert Scale</option>
                                    </select>
                            </div>



                            <div id="question_types">
                            </div>
                                <button type="submit" class="btn btn-dark">Add Question</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <script>
        let choices;

        let likertString = `
        <div class="form-group mb-2">
                <label for="likert">Enter Likert value</label>
                <input name="answer[answerValue]" type="number" class="form-control" placeholder="Enter Likert Value" value="{{ old('answer.answerValue') }}">

                @error('answer.answerValue')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
        </div>`;

    let radioString= `
    <div class="form-group mb-2">
        <fieldset>
            <legend>Choices</legend>
                <div>
                    <div class="form-group">
                        <label for="answer1">Choice 1</label>
                        <input name="answers[][answerValue]" type="text"
                        value="{{ old('answers.0.answerValue') }}"
                        class="form-control" id="answer1" aria-describedby="choicesHelp" placeholder="Enter Choice 1" value="{{ old('answer.0.answerValue') }}">

                                @error('answers.0.answerValue')
                                    <small class="text-danger">{{ $message }}</small>
                                 @enderror
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                        <label for="answer2">Choice 2</label>
                        <input name="answers[][answerValue]" type="text"
                        value="{{ old('answers.1.answerValue') }}"
                        class="form-control" id="answer2" aria-describedby="choicesHelp" placeholder="Enter Choice 2" value="{{ old('answer.1.answerValue') }}">

                        @error('answers.1.answerValue')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </fieldset>
    </div>`;

            let textString = `<input type="hidden" name="answer[answerValue]" value="null">`;
        const prefValue = ()=>{
            let optionSelected = document.getElementById('prefs').value;
            const newDiv = document.createElement("div");

            if(optionSelected === 'range')
            {
                let choices = document.getElementById('choices');
                if(choices != null)
                {
                    if(choices.style.display === 'block')
                {
                    choices.style.display = 'none';
                }
                }

                //document.getElementById('choices').style.display = 'none';
                newDiv.id = "likerts";
                newDiv.innerHTML = likertString;
                document.getElementById('question_types').appendChild(newDiv);

                //document.getElementById('choices').style.display = 'none';
            }
            if(optionSelected === 'radio')
            {
                let likert = document.getElementById('likerts');
                if(likert != null){
                    if(likert.style.display === 'block')
                {
                    likert.style.display = 'none';
                }
                }
                newDiv.id = "choices";
                newDiv.innerHTML = radioString;
                document.getElementById('question_types').appendChild(newDiv);

            }
            if(optionSelected === 'text')
            {
                /*document.getElementById('likerts').style.display='none';
                document.getElementById('choices').style.display='none';
                newDiv.innerHTML = ;
                document.getElementById('question_types').appendChild(newDiv);*/
            }
        }
    </script>
</body>
</html>
