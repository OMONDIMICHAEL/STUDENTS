// ///networking cat2 quiz///////////////////////////////////////////////
const networkingCat2Questions = [
    {
        networkingCat2Question: "How's the journey been.",
        networkingCat2Answers: [
            { text: "Easy", right: false},
            { text: "Hard", right: true},
             { text: "Normal", right: false},
        ]
    },
    {
        networkingCat2Question: "What course do you wan't to do next.",
        networkingCat2Answers: [
            { text: "Cyber Security", right: true },
            { text: "Computer Science", right: false },
            { text: "Theology", right: false },
        ]
    },
    {
        networkingCat2Question: "What is your favorite TV series.",
        networkingCat2Answers: [
            { text: "Prison Break.", right: true },
            { text: "Deep State.", right: false },
            {  text: "Ragnar.", right: false },
        ]
    }
];
// ///////////
const networkingCat2QuestionElement = document.getElementById("networkingCat2Question");
const networkingCat2AnswerButtons = document.getElementById("networkingCat2Answer-Buttons");
const networkingCat2NextButtton = document.getElementById("networkingCat2Next-Btn");
// /////////
const networkingCat2txtAns = document.getElementById("networkingCat2Scores");
const networkingCat2Submit = document.getElementsByClassName("submit");
// /////////
let networkingCat2CurrentQuestionIndex = 0;
let networkingCat2Score = 0;
// /////////
function networkingCat2StartQuiz(){
    networkingCat2CurrentQuestionIndex = 0;
    networkingCat2Score= 0;
    networkingCat2NextButtton.innerHTML = "Next";
    networkingCat2ShowQuestion();
}
// /////////
function networkingCat2ShowQuestion() {
networkingCat2ResetState();
    let networkingCat2CurrentQuestion = networkingCat2Questions[networkingCat2CurrentQuestionIndex];
    let networkingCat2QuestionNo = networkingCat2CurrentQuestionIndex + 1;
    networkingCat2QuestionElement.innerHTML = networkingCat2QuestionNo + "." + networkingCat2CurrentQuestion.networkingCat2Question;
    networkingCat2txtAns.value=networkingCat2Score;
// /////////
    networkingCat2CurrentQuestion.networkingCat2Answers.forEach(networkingCat2Answer => {
        const networkingCat2ButtonAns = document.createElement("button");
        networkingCat2ButtonAns.innerHTML = networkingCat2Answer.text;
        networkingCat2ButtonAns.classList.add("btn");
        networkingCat2AnswerButtons.appendChild(networkingCat2ButtonAns);
        if (networkingCat2Answer.right) {
            networkingCat2ButtonAns.dataset.right= networkingCat2Answer.right;
        }
        networkingCat2ButtonAns.addEventListener("click",networkingCat2SelectAnswer);
    });
}
// /////////
function networkingCat2ResetState() {
    networkingCat2NextButtton.style.display="none";
    while (networkingCat2AnswerButtons.firstChild) {
        networkingCat2AnswerButtons.removeChild(networkingCat2AnswerButtons.firstChild);
    }
}
// /////////
function networkingCat2SelectAnswer(e) {
    const networkingCat2SelectedBtn = e.target;
    const networkingCat2isCorrect = networkingCat2SelectedBtn.dataset.right === "true";
    if (networkingCat2isCorrect) {
        networkingCat2SelectedBtn.classList.add("right");
        networkingCat2Score ++;
    } else {
        networkingCat2SelectedBtn.classList.add("incorrect");
    }

    Array.from(networkingCat2AnswerButtons.children).forEach(networkingCat2ButtonAns =>{
        if (networkingCat2ButtonAns.dataset.right === "true") {
            networkingCat2ButtonAns.classList.add("right");
        }
        networkingCat2ButtonAns.disabled = true;
    });
    networkingCat2NextButtton.style.display = "block";
}
// /////////
function networkingCat2ShowScore() {
    networkingCat2ResetState();
    networkingCat2QuestionElement.innerHTML = `you scored ${networkingCat2Score} out of ${networkingCat2Questions.length}!!`;
    networkingCat2txtAns.value=networkingCat2Score;
    networkingCat2Submit.style.display="block";
}
// /////////
function networkingCat2HandleNextButton() {
    networkingCat2CurrentQuestionIndex++;
    if (networkingCat2CurrentQuestionIndex < networkingCat2Questions.length) {
        networkingCat2ShowQuestion();
        networkingCat2txtAns.value=networkingCat2Score;
    }else{
        networkingCat2ShowScore();
    }
}
// /////////
networkingCat2NextButtton.addEventListener("click", ()=>{
    if (networkingCat2CurrentQuestionIndex < networkingCat2Questions.length) {
        networkingCat2HandleNextButton();
    } else {
        networkingCat2StartQuiz();
    }
});
// /////////
networkingCat2StartQuiz();
// //start of cat2 countdown timer and submit cat btn for networking cat1///////////////////
var networkingCat2CountDownDate = new Date("March 24, 2024 00:00:00").getTime();
var networkingCat2Interval = setInterval(function() {
    var networkingCat2Now = new Date().getTime();
    var networkingCat2TimeDiference = networkingCat2CountDownDate - networkingCat2Now;
    var networkingCat2Days = Math.floor(networkingCat2TimeDiference / (1000 * 60 * 60 *24));
    var networkingCat2Hours = Math.floor((networkingCat2TimeDiference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var networkingCat2Minutes = Math.floor((networkingCat2TimeDiference % (1000 * 60 * 60)) / (1000 * 60));
    var networkingCat2Seconds = Math.floor((networkingCat2TimeDiference % (1000 * 60)) / 1000);
            document.getElementById("networkingCat2CountDownTimer").innerHTML = networkingCat2Days + "days " + networkingCat2Hours + "hrs " + networkingCat2Minutes + "mins " + networkingCat2Seconds + "secs ";
            if (networkingCat2TimeDiference < 0) {
                clearInterval(networkingCat2Interval);
                networkingCat2ShowScore();
                document.getElementById("networkingCat2CountDownTimer").innerHTML = "Time Out??";
                document.getElementById("networkingCat2TimeOut").innerHTML="You cant submit because your time for finishing the test has elapsed.";
                document.getElementsByClassName("submit").style.display="none";
                }
        }, 1000);
// //end of countdown timer and submit cat btn/////////////////////
// //end of networking cat 1 quiz///////////////////////////////////
// /////////////////////////////////////////////////////////////