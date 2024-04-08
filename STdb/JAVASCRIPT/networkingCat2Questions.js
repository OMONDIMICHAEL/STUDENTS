///networking cat1 quiz///////////////////////////////////////////////
const networkingCat1Questions = [
    {
        networkingCat1Question: "What Coure do you want to do next.",
        networkingCat1Answers: [
            { txt: "Computer Science", correct: false},
            { txt: "Cyber Security", correct: true},
             { txt: "Theology", correct: false},
        ]
    },
    {
        networkingCat1Question: "What is your favourite TV series.",
        networkingCat1Answers: [
            { txt: "Prison Break", correct: true },
            { txt: "Deep State", correct: false },
            { txt: "Ragnar", correct: false },
        ]
    },
    {
        networkingCat1Question: "How's the journey been.",
        networkingCat1Answers: [
            { txt: "Hard.", correct: true },
            { txt: "Easy.", correct: false },
            {  txt: "Normal.", correct: false },
        ]
    }
];
///////////
const networkingCat1QuestionElement = document.getElementById("networkingCat1Question");
const networkingCat1AnswerButtons = document.getElementById("answer-buttons");
const networkingCat1NextButtton = document.getElementById("next-btn");
// /////////
const networkingCa1txtAns = document.getElementById("scores");
const networkingCa1Submit = document.getElementById("sbmt");
// /////////
let networkingCat1CurrentQuestionIndex = 0;
let networkingCat1Score = 0;
// /////////
function networkingCat1StartQuiz(){
    networkingCat1CurrentQuestionIndex = 0;
    networkingCat1Score= 0;
    networkingCat1NextButtton.innerHTML = "Next";
    networkingCat1ShowQuestion();
}
/////////
function networkingCat1ShowQuestion() {
networkingCat1ResetState();
    let networkingCat1CurrentQuestion = networkingCat1Questions[networkingCat1CurrentQuestionIndex];
    let networkingCat1QuestionNo = networkingCat1CurrentQuestionIndex + 1;
    networkingCat1QuestionElement.innerHTML = networkingCat1QuestionNo + "." + networkingCat1CurrentQuestion.networkingCat1Question;
    networkingCa1txtAns.value=networkingCat1Score;
// /////////
    networkingCat1CurrentQuestion.networkingCat1Answers.forEach(networkingCat1Answer => {
        const networkingCat1ButtonAns = document.createElement("button");
        networkingCat1ButtonAns.innerHTML = networkingCat1Answer.txt;
        networkingCat1ButtonAns.classList.add("btn");
        networkingCat1AnswerButtons.appendChild(networkingCat1ButtonAns);
        if (networkingCat1Answer.correct) {
            networkingCat1ButtonAns.dataset.correct= networkingCat1Answer.correct;
        }
        networkingCat1ButtonAns.addEventListener("click",networkingCat1SelectAnswer);
    });
}
/////////
function networkingCat1ResetState() {
    networkingCat1NextButtton.style.display="none";
    while (networkingCat1AnswerButtons.firstChild) {
        networkingCat1AnswerButtons.removeChild(networkingCat1AnswerButtons.firstChild);
    }
}
/////////
function networkingCat1SelectAnswer(e) {
    const networkingCat1SelectedBtn = e.target;
    const networkingCat1isCorrect = networkingCat1SelectedBtn.dataset.correct === "true";
    if (networkingCat1isCorrect) {
        networkingCat1SelectedBtn.classList.add("correct");
        networkingCat1Score ++;
    } else {
        networkingCat1SelectedBtn.classList.add("incorrect");
    }

    Array.from(networkingCat1AnswerButtons.children).forEach(networkingCat1ButtonAns =>{
        if (networkingCat1ButtonAns.dataset.correct === "true") {
            networkingCat1ButtonAns.classList.add("correct");
        }
        networkingCat1ButtonAns.disabled = true;
    });
    networkingCat1NextButtton.style.display = "block";
}
/////////
function networkingCat1ShowScore() {
    networkingCat1ResetState();
    networkingCat1QuestionElement.innerHTML = `you scored ${networkingCat1Score} out of ${networkingCat1Questions.length}!!`;
    networkingCa1txtAns.value=networkingCat1Score;
    networkingCa1Submit.style.display="block";
}
/////////
function networkingCat1HandleNextButton() {
    networkingCat1CurrentQuestionIndex++;
    if (networkingCat1CurrentQuestionIndex < networkingCat1Questions.length) {
        networkingCat1ShowQuestion();
        networkingCa1txtAns.value=networkingCat1Score;
    }else{
        networkingCat1ShowScore();
    }
}
/////////
networkingCat1NextButtton.addEventListener("click", ()=>{
    if (networkingCat1CurrentQuestionIndex < networkingCat1Questions.length) {
        networkingCat1HandleNextButton();
    } else {
        networkingCat1StartQuiz();
    }
});
/////////
networkingCat1StartQuiz();
// //start of cat countdown timer and submit cat btn for networking cat1///////////////////
var networkingCat1CountDownDate = new Date("December 24, 2024 00:00:00").getTime();
var x = setInterval(function() {
    var now = new Date().getTime();
    var networkingCat1TimeDiference = networkingCat1CountDownDate - now;
    var networkingCat1Days = Math.floor(networkingCat1TimeDiference / (1000 * 60 * 60 *24));
    var networkingCat1Hours = Math.floor((networkingCat1TimeDiference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var networkingCat1Minutes = Math.floor((networkingCat1TimeDiference % (1000 * 60 * 60)) / (1000 * 60));
    var networkingCat1Seconds = Math.floor((networkingCat1TimeDiference % (1000 * 60)) / 1000);
            document.getElementById('countDownTimer').innerHTML = networkingCat1Days + "days " + networkingCat1Hours + "hrs " + networkingCat1Minutes + "mins " + networkingCat1Seconds + "secs ";
            if (networkingCat1TimeDiference < 0) {
                clearInterval(x);
                networkingCat1ShowScore();
                document.getElementById("countDownTimer").innerHTML = "Time Out??";
                document.getElementById("timeOut").innerHTML="You cant submit because your time for finishing the test has elapsed.";
                document.getElementById("sbmt").style.display="none";
                }
        }, 1000);
//end of countdown timer and submit cat btn/////////////////////
//end of networking cat 1 quiz///////////////////////////////////
/////////////////////////////////////////////////////////////