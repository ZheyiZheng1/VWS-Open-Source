@section('surveySocialWorkout')
    <!--top includes greetings, avatar, user name and drop down list-->
    <!--all followed the mainpage design in first mockup, might change in later-->
    <div class="survey-title">
        <h2>SOCIAL SUPPORT AND EXERCISE SURVEY</h2>
    </div>

    <!--Survey form start from here-->
    <!--Should be in the middle of the screen-->
    <!-- this component form comes from https://getbootstrap.com/docs/5.0/forms/overview/ -->
    <div class='survey'>
            @csrf
            <p>Below is a list of things people might do or say to someone who is trying to exercise regularly. If you are not trying to exercise, then some of the questions may not apply to you, but please read and give an answer to every question.</p>
            <p>Please rate each question twice. Under family, rate how often anyone living in your household has said or done what is described during the last three months. Under friends, rate how often your friends, acquaintances, or coworkers have said or done what is described during the last three months.</p>
            <p></p>
            <br>
            <p>During the past three months, my family (or members of my household) or friends:</p>
            <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 1) Family: Exercised with me.</label>
                 <input name="question1" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(0)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 1) Friends: Exercised with me.</label>
                 <input name="question2" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(1)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 2) Family: Offered to exercise with me.</label>
                 <input name="question3" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(2)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 2) Friends: Offered to exercise with me.</label>
                 <input name="question4" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(3)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 3) Family: Gave me helpful reminders to exercise ("Are you going to exercise tonight?”).</label>
                 <input name="question5" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(4)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 3) Friends: Gave me helpful reminders to exercise ("Are you going to exercise tonight?”).</label>
                 <input name="question6" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(5)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 4) Family: Gave me encouragement. to stick with my exercise program.</label>
                 <input name="question7" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(6)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 4) Friends: Gave me encouragement. to stick with my exercise program.</label>
                 <input name="question8" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(7)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 5) Family: Changed their schedule so we could exercise together.</label>
                 <input name="question9" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(8)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 5) Friends: Changed their schedule so we could exercise together.</label>
                 <input name="question10" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(9)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 6) Family: Discussed exercise with me.</label>
                 <input name="question11" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(10)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 6) Friends: Discussed exercise with me.</label>
                 <input name="question12" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(11)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 7) Family: Complained about the time I spend exercising.</label>
                 <input name="question13" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(12)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 7) Friends: Complained about the time I spend exercising.</label>
                 <input name="question14" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(13)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 8) Family: Criticized me or made fun of me for exercising.</label>
                 <input name="question15" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(14)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 8) Friends: Criticized me or made fun of me for exercising.</label>
                 <input name="question16" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(15)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 9) Family: Gave me rewards for exercising (bought me something or gave me something I like).</label>
                 <input name="question17" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(16)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 9) Friends: Gave me rewards for exercising (bought me something or gave me something I like).</label>
                 <input name="question18" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(17)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 10) Family: Planned for exercise on recreational outings.</label>
                 <input name="question19" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(18)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 10) Friends: Planned for exercise on recreational outings.</label>
                 <input name="question20" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(19)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                    </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 11) Family: Helped plan activities around my exercise.</label>
                 <input name="question21" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(20)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 11) Friends: Helped plan activities around my exercise.</label>
                 <input name="question22" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(21)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                    </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 12) Family: Asked me for ideas on how they can get more exercise.</label>
                 <input name="question23" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(22)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 12) Friends: Asked me for ideas on how they can get more exercise.</label>
                 <input name="question24" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(23)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                    </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 13) Family: Talked about how much they like to exercise.</label>
                 <input name="question25" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(24)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 13) Friends: Talked about how much they like to exercise.</label>
                 <input name="question26" type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(25)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                    </div>
 			</div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script>

        let getAllQuestions = document.querySelectorAll('.question');

        for (let i = 0; i < getAllQuestions.length; i++) {
            let outputDiv = getAllQuestions[i].querySelector('.output');
            let currentLikertValue = getAllQuestions[i].querySelector('.form-range').value;
            outputDiv.innerText = currentLikertValue;
        }

        function updateQuestion(questionNum) {
            let getAllQuestions = document.querySelectorAll('.question');
            let outputDiv = getAllQuestions[questionNum];
            let inlineElement = outputDiv.querySelector('.output');
            let currentLikertValue = getAllQuestions[questionNum].querySelector('.form-range').value;
            inlineElement.innerText = currentLikertValue;
        }

    </script>
@endsection('surveySocialWorkout')
