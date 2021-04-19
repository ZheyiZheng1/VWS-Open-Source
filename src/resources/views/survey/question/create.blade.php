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
        <h2>Good Morning {{auth()->user()->name}},</h2>
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

                                @error('question')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-2">
                                    <label for="question-type">Select question type</label>
                                    <select class="form-control" name="questionType" id="prefs" onchange="javascript:prefValue()">
                                    <option value="radio" @if (old('questionType') == "radio") {{ 'selected' }} @endif>Multiple Choice</option>
                                    <option value="text" @if (old('questionType') == "text") {{ 'selected' }} @endif>Text/Number</option>
                                    <option value="range" @if (old('questionType') == "range") {{ 'selected' }} @endif >Likert Scale</option>
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
                                <fieldset id="choice">
                                    <legend>Choices</legend>
                                    <div id="choice_group">

                                    </div>

                                    <button type="button" onclick="add_new_choice()" class="btn btn-dark">Add another choice</button>
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

        function add_new_choice(){
                var div = document.createElement("div");
                div.setAttribute("style", "display: flex;")

                //label
                var new_field_b = document.createElement("label");
                // set input field data type to text
                new_field_b.setAttribute("for", "choice[]");
                new_field_b.setAttribute("style", "padding: 5px;")
                new_field_b.innerHTML = "Choice";
                // select last position to insert element before it
                // insert element
                var choiceGroup = document.getElementById("choice_group").appendChild(new_field_b);
                div.appendChild(choiceGroup);
                div.appendChild(new_field_b);

                //choice bar
                // create an input field to insert
                var new_field_a = document.createElement("input");
                // set input field data type to text
                new_field_a.setAttribute("type", "text");
                // set input field name
                new_field_a.setAttribute("name", "choice[]");
                // set class
                new_field_a.setAttribute("class", "form-control");
                // set aria-describedby
                new_field_a.setAttribute("aria-describedby", "choicesHelp");
                // set placeholder
                new_field_a.setAttribute("placeholder", "Enter choice");
                // select last position to insert element before it
                // insert element
                //document.getElementById("choice_group").appendChild(new_field_a);
                div.appendChild(new_field_a);

                //remove button
                var new_field_c = document.createElement("button");
                // set input field data type to text
                // set input field name
                new_field_c.innerText = "remove";
                new_field_c.setAttribute("class", "btn btn-dark");
                // set aria-describedby
                new_field_a.setAttribute("aria-describedby", "choicesHelp");
                // set function
                new_field_c.setAttribute("onclick", "remove_textbox(this)");
                // select last position to insert element before it
                // insert element
                //document.getElementById("choice_group").appendChild(new_field_c);
                div.appendChild(new_field_c);

                document.getElementById("choice_group").appendChild(div);
            }

        function remove_textbox(div){
            document.getElementById("choice_group").removeChild(div.parentNode);
        }
        </script>
    </script>
</body>
</html>
