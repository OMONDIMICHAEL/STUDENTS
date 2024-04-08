<?php include("../SESSION/session.php"); ?>
<?php
    //<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
    //<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>  
    include("../CONNECTIONS/studentsConnection.php");
    include("../FUNCTIONS/studentsFunctions.php");
    $question_no = "";
    $question = "";
    $choice1 = "";
    $choice2 = "";
    $count = 0;
    $answer = "";
    $ans = "";

    $queNo = $_GET["questionnno"];

    if (isset($_SESSION["answer"][$queNo])) {
        $ans = $_SESSION["answer"][$queNo];
    }
        $sql = ("SELECT * from catQuestions where category = '$_SESSION[exam_category]' && question_no = $_GET[questionno]");
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
        <table><tr>
            <td>
                <?php echo "(".$question_no."). ".$question; ?>
            </td></tr>
        </table>

        <table>
            <tr>
                <td>
                    <input type = "radio" name="r1" id="r1" value="<?php echo $choice1; ?>" ONCLICK="radioclick(this.value,<?php echo $question_no; ?>);"
                   <?php
                   if ($ans == $choice1) {
                    echo "checked";
                   }
                  ?>> <?php echo $choice1; ?>
               </td>
            </tr>
            <tr>
                <td>
                    <input type = "radio" name="r1" id="r1" value = "<?php echo $choice2; ?>" ONCLICK= "radioclick(this.value,<?php echo $question_no; ?>);"
                   <?php
                   if ($ans == $choice2) {
                    echo "checked";
                   }
                   ?>> <?php echo $choice2; ?>
               </td>
            </tr>
        </table>
            <?php    } 
        
        ?>