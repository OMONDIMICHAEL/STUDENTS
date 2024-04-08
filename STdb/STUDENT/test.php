<?php //include("../SESSION/session.php"); ?>
<?php
    //<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
    //<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>  
    //include("../CONNECTIONS/studentsConnection.php");
    //include("../FUNCTIONS/studentsFunctions.php");
    $question_no = "";
    $question = "";
    $choice1 = "";
    $choice2 = "";
    $count = 0;
    $answer = "";
    $ans = "";

    //$queNo = $_GET["questionnno"];

    // if (isset($_SESSION["answer"][$queNo])) {
        // $ans = $_SESSION["answer"][$queNo];
    // }
        $sql = ("SELECT * from catQuestions where category = 'asp.net' /*&& question_no = $_GET[questionno]*/");
        $query = mysqli_query($con,$sql);
        $count = mysqli_num_rows($query);

        if ($count == 0) {
            echo "over";
                }
                else{
                    while ($info = mysqli_fetch_array($query)){
            $question_no   = $info["question_no"];
            $question       = $info["question"];
            $choice1        = $info["choice1"];
            $choice2        = $info["choice2"];
        } ?>
        <br>
<!--         <table><tr>
            <td>
                <?php //echo "(".$question_no."). ".$question; ?>
            </td></tr>
        </table>

        <table>
            <tr>
                <td>
                    <input type = "radio" name="r1" id="r1" value="<?php //echo $choice1; ?>" ONCLICK="radioclick(this.value,<?php //echo $question_no; ?>);"
                   <?php
                   //if ($ans == $choice1) {
                    //echo "checked";
                   //}
                  ?>> <?php //echo $choice1; ?>
               </td>
            </tr>
            <tr>
                <td>
                    <input type = "radio" name="r1" id="r1" value = "<?php //echo $choice2; ?>" ONCLICK= "radioclick(this.value,<?php //echo $question_no; ?>);"
                   <?php
                   //if ($ans == $choice2) {
                    //echo "checked";
                   //}
                   ?>> <?php //echo $choice2; ?>
               </td>
            </tr>
        </table> -->
        <!-- <div style="min-height: 50px;">
                        <input type="button" value="Previous" onclick="loadPrevious();" id="sbmt">
                        <input type="button" value="NEXT" onclick="loadNext();" id="sbmt">
                    </div> -->
            <?php    } ?>
            <script>
                const questions = [
    {
        question: /*"which one is not part of PHP bind_param()."*/"<?php echo $question; ?>",
        answers: [
            { txt: /*"s"*/"<?php echo $choice1; ?>", correct: false},
            { txt: /*"l"*/"<?php echo $choice2; ?>", correct: true},
             // { txt: "i", correct: false},
        ]
    },
    {
        question: /*"How long can it take you to build this online quiz app."*/ "<?php echo $question; ?>",
        answers: [
            { txt: /*"one day"*/"<?php echo $choice1; ?>", correct: true },
            { txt: /*"not sure"*/"<?php echo $choice2; ?>", correct: false },
            // { txt: "two days", correct: false },
        ]
    },
    /*{
        question: "Which is your all time dream laptop",
        answers: [
            { txt: "Acer Predator Triton.", correct: true },
            { txt: "Asus", correct: false },
            {  txt: "Dell Latitude", correct: false },
        ]
    }*/
];

const questionElement = document.getElementById("question");
const answerButtons = document.getElementById("answer-buttons");
const nextButton = document.getElementById("next-btn");


let currentQuestionIndex = 0;
let score = 0;

function startQuiz(){
    currentQuestionIndex = 0;
    score= 0;
    nextButton.innerHTML = "Next";
    showQuestion();
}

function showQuestion() {
resetState();

    let currentQuestion = questions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + "." + currentQuestion.question;

    currentQuestion.answers.forEach(answer => {
        const button = document.createElement("button");
        button.innerHTML = answer.txt;
        button.classList.add("btn");
        answerButtons.appendChild(button);
        if (answer.correct) {
            button.dataset.correct= answer.correct;
        }
        button.addEventListener("click",selectAnswer);
    });
}

function resetState() {
    nextButton.style.display="none";
    while (answerButtons.firstChild) {
        answerButtons.removeChild(answerButtons.firstChild);
    }
}
function selectAnswer(e) {
    const selectedBtn = e.target;
    const isCorrect = selectedBtn.dataset.correct === "true";
    if (isCorrect) {
        selectedBtn.classList.add("correct");
        score ++;
    } else {
        selectedBtn.classList.add("incorrect");
    }

    Array.from(answerButtons.children).forEach(button =>{
        if (button.dataset.correct === "true") {
            button.classList.add("correct");
        }
        button.disabled = true;
    });
    nextButton.style.display = "block";
}

function showScore() {
    resetState();
    questionElement.innerHTML = `you scored ${score} out of ${questions.length}!!`;
    nextButton.innerHTML = "Re Do";
    nextButton.style.display="block";
}

function handleNextButton() {
    currentQuestionIndex++;
    if (currentQuestionIndex < questions.length) {
        showQuestion();
    }else{
        showScore();
    }
}

nextButton.addEventListener("click", ()=>{
    if (currentQuestionIndex < questions.length) {
        handleNextButton();
    } else {
        startQuiz();
    }
})

startQuiz();
            </script><?php
        
        ?>