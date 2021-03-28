
@section('surveyAppendixS')
@csrf
<!--not sure which action to use-->
    <!-- THIS IS ASKED PERIODICALLY -->
	<div class="survey-title">
        <h2>Appendix S: Work Productivity And Activity Impairment Questionnaire General Health (WPAI-GH)</h2>
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
                <input type="hidden" value="{{$questions[$loop->index]->id }}" name="questionNumber{{$loop->index}}" />

			</div>
			@endif
			@if($question->type === 'range')
				<div class="mb-3 question range-slider" id='question1'>
					<label for="customRange1" class="form-label"> {{ $questions[$loop->index]->question }}</label>
					<input type="range" class="range-slider__range" min="1" max="5" step="1"   name="answer{{$loop->index}}" value="{{$answers[$loop->index][0]->answerValue}}" id="customRange1" onchange="updateQuestion(1)">
					<span class="range-slider__value">5</span>
                    <input type="hidden" value="{{$questions[$loop->index]->id }}" name="questionNumber{{$loop->index}}" />

				</div>
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
	</script>
@endsection('surveyAppendixS')
