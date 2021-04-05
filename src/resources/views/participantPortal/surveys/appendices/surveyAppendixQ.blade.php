
@section('surveyAppendixQ')
    <!-- THESE NEED A DATE ATTACHED - SEMI REGULARLY -->
	<div class="survey-title">
        <h2>Appendix Q: Self-Efficacy for Managing Chronic Disease 6-item Scale</h2>
    </div>

	<div class='survey'>
		<p>We would like to know how confident you are in doing certain activities. For each of the following questions, please choose the number that corresponds to your confidence that you can do the tasks regularly at the present time. 1 as not at all confident and 10 as total confident.</p>
        @csrf
		<div class="mb-3" id='surveyQuestion'>
			<label for="customRange1" class="form-label">{{ $questions[0] }}</label>
			<input name="question1" type="range" class="form-range" min="1" max="10" step="1" id="customRange1" oninput="this.nextElementSibling.value = this.value">
			<output>6</output>
		</div>

		<div class="mb-3" id='surveyQuestion'>
			<label for="customRange2" class="form-label">{{ $questions[1] }}</label>
			<input name="question2" type="range" class="form-range" min="1" max="10" step="1" id="customRange2" oninput="this.nextElementSibling.value = this.value">
			<output>6</output>
		</div>

		<div class="mb-3" id='surveyQuestion'>
			<label for="customRange3" class="form-label">{{ $questions[2] }}</label>
			<input name="question3"  type="range" class="form-range" min="1" max="10" step="1" id="customRange3" oninput="this.nextElementSibling.value = this.value">
			<output>6</output>
		</div>

		<div class="mb-3" id='surveyQuestion'>
			<label for="customRange4" class="form-label">{{ $questions[3] }}</label>
			<input name="question4" type="range" class="form-range" min="1" max="10" step="1" id="customRange4" oninput="this.nextElementSibling.value = this.value">
			<output>6</output>
		</div>

		<div class="mb-3" id='surveyQuestion'>
			<label for="customRange5" class="form-label">{{ $questions[4] }}</label>
			<input name="question5" type="range" class="form-range" min="1" max="10" step="1" id="customRange5" oninput="this.nextElementSibling.value = this.value">
			<output>6</output>
		</div>

		<div class="mb-3" id='surveyQuestion'>
			<label for="customRange6" class="form-label">{{ $questions[5] }}</label>
			<input name="question6" type="range" class="form-range" min="1" max="10" step="1" id="customRange6" oninput="this.nextElementSibling.value = this.value">
			<output>6</output>
		</div>

			<br>
			<p>References: Lorig KR, Sobel, DS, Ritter PL, Laurent, D, Hobbs, M. Effect of a self-management program for patients with chronic disease. Effective Clinical Practice, 4, 2001,pp. 256-262.</p>
	</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script>
	document.registrationForm.ageInputId.oninput = function(){
    	document.registrationForm.ageOutputId.value = document.registrationForm.ageInputId.value;
 	}
</script>
@endsection('surveyAppendixQ')
