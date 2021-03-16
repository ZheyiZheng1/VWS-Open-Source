@section('surveySocialEating')
    <!--top includes greetings, avatar, user name and drop down list-->
    <!--all followed the mainpage design in first mockup, might change in later-->
    <div class="survey-title">
        <h2>SOCIAL SUPPORT AND EATING HABITS SURVEY</h2>
    </div>

    <!--Survey form start from here-->
    <!--Should be in the middle of the screen-->
    <!-- this component form comes from https://getbootstrap.com/docs/5.0/forms/overview/ -->
    <div class='survey'>
            @csrf
            <p>Below is a list of things people might do or say to someone who is trying to improve their eating habits. We are interested in high fat and high salt (or high sodium) foods. If you are not trying to make any of these dietary changes, then some of the questions may not apply to you, but please read and give an answer to every question.</p>
            <p>Please rate each question twice. Under family, rate how often anyone living in your household has said or done what is described during the last three months. Under friends, rate how often your friends, acquaintances, or coworkers have said or done what is described during the last three months.</p>
            <p></p>
            <br>
            <p>During the past three months, my family (or members of my household) or friends:</p>
            <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 1) Family: Encouraged me not to eat "unhealty foods" (cake, salted chips) when I'm tempted to do so.</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(0)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 1) Friends: Encouraged me not to eat "unhealty foods" (cake, salted chips) when I'm tempted to do so.</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(1)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 2) Family: Discussed my eating habit. changes with me (asked me how I'm doing with my eating changes).</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(2)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 2) Friends: Discussed my eating habit. changes with me (asked me how I'm doing with my eating changes).</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(3)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 3) Family: Reminded me not to eat high fat, high salt foods.</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(4)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 3) Friends: Reminded me not to eat high fat, high salt foods.</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(5)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 4) Family: Complimented me on changing my eating habits ("Keep it up", "We are proud of you ") .</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(6)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 4) Friends: Complimented me on changing my eating habits ("Keep it up", "We are proud of you ") .</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(7)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 5) Family: Commented if I went back to my oId eating habits.</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(8)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 5) Friends: Commented if I went back to my oId eating habits.</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(9)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 6) Family: Ate high fat or high salt foods in front of me.</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(10)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 6) Friends: Ate high fat or high salt foods in front of me.</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(11)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 7) Family: Refused to eat the same foods I eat.</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(12)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 7) Friends: Refused to eat the same foods I eat.</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(13)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 8) Family: Brought home foods I'm trying not to eat.</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(14)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 8) Friends: Brought home foods I'm trying not to eat.</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(15)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 9) Family: Got angry when I encouraged them to eat low salt, low fat foods.</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(16)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 9) Friends: Got angry when I encouraged them to eat low salt, low fat foods.</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(17)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 10) Family: Offered me food I'm trying not to eat.</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(18)">
                    <div class="inline" style="display: flex;">
                        <label for="customRange1Output" class="output-label">Current Value: </label>
                        <div class="output" id="customRange1Output"></div>
                     </div>
 			</div>
             <div class="mb-3 question" id='question1'>
 				<label for="customRange1" class="form-label"> 10) Friends: Offered me food I'm trying not to eat.</label>
                 <input type="range" class="form-range" min="1" max="5" step="1" id="customRange1" onchange="updateQuestion(19)">
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
@endsection('surveySocialEating')
