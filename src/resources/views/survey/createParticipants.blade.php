@extends('layouts.researcherlayout')
@section('title','Distribute Survey')
@section('content')
            <form id="distributeForm" action="/surveys/participants/create?surveyId={{$survey->id}}" method="POST">
                @csrf
                <div id="list-participants-for-the-study">
                    <h2>Here are the participants of the current study</h2>
                    <div class="form-check">
                        @foreach ($participants as $participant)
                        <div>
                            <input class="form-check-input" name="participant[{{$loop->index}}]" type="checkbox" value="{{$participant['id']}}" id="participant-{{$participant['id']}}">
                            <label class="form-check-label" for="participant-{{$participant['id']}}">
                                {{ $participant["name"] }}
                            </label>
                        </div>
                        @endforeach
                    </div>
                <button type="submit" class="btn btn-dark">Add Participant(s)</button>
            </form>
    <script>
        document.getElementById('programstartdate').valueAsDate = new Date(); //this sets program start to default date
        //currentParticipantNumber use to keep track the number of participants
        var reqs_id = 5;

        function removeElement(ev) {
            var button = ev.target;
            var field = button.previousSibling;
            var div = button.parentElement;
            div.removeChild(button);
            div.removeChild(field);
        }

        function remove_field() {
            let inputGroup = document.getElementById('list-participants-for-the-study');

            let currentParticipantNumber = inputGroup.children.length - 1;
            if (currentParticipantNumber < 2 || currentParticipantNumber > 10) return;
            console.log(currentParticipantNumber);
            console.log(inputGroup.children.length - 1)
            //remove last child node
            inputGroup.removeChild(inputGroup.children[currentParticipantNumber]);


        }

        function add_field() {
            let numbersInText = ["Zero", "One", "Two", "Three", "Four", "Five", "Six",
            "Seven", "Eight", "Nine", "Ten"];

            let inputGroup = document.getElementById('list-participants-for-the-study');

            let currentParticipantNumber = inputGroup.children.length - 1;
            if (currentParticipantNumber < 2 || currentParticipantNumber > 9) return;
            currentParticipantNumber++; // increment currentParticipantNumber to get a unique ID for the new element

            //get the first group div
            let inputGroup = document.getElementById('participant-1-group').cloneNode(true);
            console.log(inputGroup)
            inputGroup.setAttribute("id", "participant-" + currentParticipantNumber + "-group");

            //get the first child node
            let selectGroup = inputGroup.children[0];
            selectGroup.setAttribute("id", "participant" + numbersInText[currentParticipantNumber]);
            selectGroup.setAttribute("class", "participant" + numbersInText[currentParticipantNumber]);
            selectGroup.setAttribute("name", "participant" + numbersInText[currentParticipantNumber]);

            //get the group of nodes to append
            let inputNode = document.getElementById('list-participants-for-the-study');
            inputNode.appendChild(inputGroup);
        }
    </script>
@endsection
