
@section('surveyAppendixQ')
    <!-- THESE NEED A DATE ATTACHED - SEMI REGULARLY -->
	<div class="survey-title">
        <h2>Appendix Q: Self-Efficacy for Managing Chronic Disease 6-item Scale</h2>
    </div>

	<div class='survey'>
		<p>We would like to know how confident you are in doing certain activities. For each of the following questions, please choose the number that corresponds to your confidence that you can do the tasks regularly at the present time. 1 as not at all confident and 10 as total confident.</p>
        @csrf


        <div class="mb-3 range-slider" id='surveyQuestion'>
            <label for="customRange1" class="form-label">How confident do you feel that you can keep the fatigue caused by your disease from interfering with the things you want to do?</label>
            <input name="question1" class="range-slider__range" type="range" value="10" step="1" min="0" max="10">
            <span class="range-slider__value">10</span>
        </div>

		<div class="mb-3 range-slider" id='surveyQuestion'>
			<label for="customRange2" class="form-label">How confident do you feel that you can keep the physical discomfort or pain of your disease from interfering with the things you want to do?</label>
            <input name="question2" class="range-slider__range" type="range" value="10" step="1" min="0" max="10">
            <span class="range-slider__value">10</span>
		</div>

		<div class="mb-3 range-slider" id='surveyQuestion'>
			<label for="customRange3" class="form-label">How confident do you feel that you can keep the emotional distress caused by your disease from interfering with the things you want to do?</label>
			<input name="question3"  class="range-slider__range" type="range" value="10" step="1" min="0" max="10">
			<span class="range-slider__value">10</span>
		</div>

		<div class="mb-3 range-slider" id='surveyQuestion'>
			<label for="customRange4" class="form-label">How confident do you feel that you can keep any other symptoms or health problems you have from interfering with the things you want to do?</label>
			<input name="question4" type="range" class="range-slider__range" min="1" max="10" step="1" value="10">
			<span class="range-slider__value">10</span>
		</div>

		<div class="mb-3 range-slider" id='surveyQuestion'>
			<label for="customRange5" class="form-label">How confident do you feel that you can the different tasks and activities needed to manage your health condition so as to reduce your need to see a doctor?</label>
			<input name="question5" type="range" class="range-slider__range" min="1" max="10" step="1" value="10">
			<span class="range-slider__value">10</span>
		</div>

		<div class="mb-3 range-slider" id='surveyQuestion'>
			<label for="customRange6" class="form-label">How confident do you feel that you can do things other than just taking medication to reduce how much your illness affects your everyday life?</label>
			<input name="question6" type="range" class="range-slider__range" min="1" max="10" step="1" value="10">
			<span class="range-slider__value">10</span>
		</div>

			<br>
			<p>References: Lorig KR, Sobel, DS, Ritter PL, Laurent, D, Hobbs, M. Effect of a self-management program for patients with chronic disease. Effective Clinical Practice, 4, 2001,pp. 256-262.</p>
	</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
@endsection('surveyAppendixQ')
