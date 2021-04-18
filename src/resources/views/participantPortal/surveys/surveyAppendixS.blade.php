
@section('surveyAppendixS')
@csrf
<!--not sure which action to use-->
    <!-- THIS IS ASKED PERIODICALLY -->
	<div class="survey-title">
        <h2>{{$survey[0]->SurveyName}}</h2>
    </div>

	<div class='survey'>
		<input type="hidden" name="userId" placeholder="1">
		@foreach ($questions as $question)
			@if($question->type === 'text')
			<div class="mb-3" id='surveyQuestion'>
				<label for="surveyQuestion" class="form-label">{{ $questions[$loop->index]->question }}</label>
				<input type="text" class="form-control" aria-describedby="questionTwo"  name="answer{{$loop->index}}"
                 placeholder="{{$answers[$loop->index][0]->answerValue}}">
				</input>
                <input type="hidden" value="{{$questions[$loop->index]->id }}" name="questionNumber{{$loop->index}}" />
			</div>
			@endif
			@if($question->type === 'radio')
			<div class="mb-3" id='surveyQuestion'>
				<label for="surveyQuestion" class="form-label">{{ $questions[$loop->index]->question }}</label>
				<div class="form-check">
					<input class="form-check-input" onclick="becomeAvailable();" type="radio"  name="answer{{$loop->index}}" id="questionOneAnswer1" checked>
					<label class="form-check-label" for="questionOneAnswer1">
						{{$answers[$loop->index][0]->answerValue}}
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" onclick="becomeReadOnly();"type="radio"  name="answer{{$loop->index}}" id="questionOneAnswer2">
					<label class="form-check-label" for="questionOneAnswer2">
						{{$answers[$loop->index][1]->answerValue}}
					</label>
				</div>
                @if(count($answers[$loop->index]) > 2)
				<div class="form-check">
					<input class="form-check-input" onclick="becomeReadOnly();"type="radio"  name="answer{{$loop->index}}" id="questionOneAnswer3">
					<label class="form-check-label" for="questionOneAnswer3">
						{{$answers[$loop->index][2]->answerValue}}
					</label>
				</div>
                @endif
                @if(count($answers[$loop->index]) > 3)
				<div class="form-check">
					<input class="form-check-input" onclick="becomeReadOnly();"type="radio"  name="answer{{$loop->index}}" id="questionOneAnswer4">
					<label class="form-check-label" for="questionOneAnswer4">
						{{$answers[$loop->index][3]->answerValue}}
					</label>
				</div>
                @endif
                @if(count($answers[$loop->index]) > 4)
				<div class="form-check">
					<input class="form-check-input" onclick="becomeReadOnly();"type="radio"  name="answer{{$loop->index}}" id="questionOneAnswer5">
					<label class="form-check-label" for="questionOneAnswer5">
						{{$answers[$loop->index][4]->answerValue}}
					</label>
				</div>
                @endif
                <input type="hidden" value="{{$questions[$loop->index]->id }}" name="questionNumber{{$loop->index}}" />

			</div>
			@endif
			@if($question->type === 'range')
                <div class="mb-3 question range-slider" id='question1'>
                    <label for="customRange1" class="form-label"> {{ $questions[$loop->index]->question }}</label>
                    <input name="answer{{$loop->index}}" type="range" class="range-slider__range form-range" min="1" max="{{$answers[$loop->index][0]->answerValue }}" value="{{$answers[$loop->index][0]->answerValue }}" step="1" id="customRange1" onchange="updateQuestion(0)">
                    <span class="range-slider__value output">{{ $questions[$loop->index]->id }}</span>
                </div>
                <input type="hidden" value="{{$questions[$loop->index]->id }}" name="questionNumber{{$loop->index}}" />
			@endif
		@endforeach
	</div>

	<script>
		function becomeReadOnly(){
			document.getElementById("questionTwo").readOnly = true;
			document.getElementById("questionThree").readOnly = true;
			document.getElementById("questionFour").readOnly = true;
			document.getElementById("questionFive").readOnly = true;
		}

		function becomeAvailable(){
			document.getElementById("questionTwo").readOnly = false;
			document.getElementById("questionThree").readOnly = false;
			document.getElementById("questionFour").readOnly = false;
			document.getElementById("questionFive").readOnly = false;
		}

		function becomeReadOnlyQ4(){
			document.getElementById("questionFour").readOnly = true;
			document.getElementById("questionFive").readOnly = true;
			document.getElementById("questionFourHour").readOnly = true;
		}

		function becomeAvailableQ4(){
			document.getElementById("questionFour").readOnly = false;
			document.getElementById("questionFive").readOnly = false;
			document.getElementById("questionFourHour").readOnly = false;
		}

        let getAllQuestions = document.querySelectorAll('.question');
        console.log(getAllQuestions);

        for (let i = 0; i < getAllQuestions.length; i++) {
            let outputDiv = getAllQuestions[i].querySelector('.output');
            let currentLikertValue = getAllQuestions[i].querySelector('.form-range').value;
            outputDiv.innerText = currentLikertValue;
        }

        function updateQuestion(questionNum) {
            let getAllQuestions = document.querySelectorAll('.question');
            let outputDiv = getAllQuestions[questionNum];
            console.log(outputDiv);
            let inlineElement = outputDiv.querySelector('.output');
            let currentLikertValue = getAllQuestions[questionNum].querySelector('.form-range').value;
            inlineElement.innerText = currentLikertValue;
        }

    </script>
@endsection('surveyAppendixS')
