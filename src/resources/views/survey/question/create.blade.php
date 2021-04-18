@extends('layouts.researcherlayout')
@section('content')
    <title>{{$survey -> title}}</title>
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
@endsection
