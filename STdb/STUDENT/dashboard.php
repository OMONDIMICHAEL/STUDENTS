<?php include("../SESSION/session.php"); ?>
<?php
//include_once("../urlScript.php");  
//strip_php_extension();
?>
<!--
    <<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
    <<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>  -->
<!DOCTYPE html>
	<html lang="en" dir="ltr">
	<head> 
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="mikemike3662@gmail.com">
    <meta name="description" content="This is a virtual school">
<title>
    virtual school.
</title>
<link rel="icon" href="../IMAGES/schoolLogo.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../CSS/teacherNetworking.css">
        <script type="text/javascript" src = "../FUNCTIONS/studentsJsFunctions.js"></script>
    </head>
    <body>
<!-- /////////////////////////////////////////////////////// -->
        <header><?php require("../HEADER/studentHeader.php"); ?></header>
<!-- /////////////////////////////////////////////////////// -->
<main>
    <article class="bodyContainer">
<!-- //////////////////////////////////////////////////////// -->
        <section id="countDownTimer" style="display: block;">
        </section>
<!-- ///////////////////////////////////////////////////////////// -->
            <script type="text/javascript">
                setInterval(function() {
                            timer();
                        },1000);
                function timer() {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function(){
                        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                            if (xmlhttp.responseText == "00:00:01") {
                                window.location = "result.php";
                            }
                            document.getElementById("countDownTimer").innerHTML = xmlhttp.responseText;
                        }
                    };
                    xmlhttp.open("GET","../AJAX/loadTimer.php",true);
                    xmlhttp.send(null);
                    }
            </script>
<!-- ////////////////////////////////////////////////////////// -->
                <section class="row"><br>
                    <section id="currentQue" style="float: left;">0</section>
                    <section style="float: left;">/</section>
                    <section id="totalQue" style="float: left;">0</section>
                </section><br>
<!-- ////////////////////////////////////////////////////// -->
                <section class="row" style="margin-top: 20px;">
                    <section class="row">
                        <section style="min-height: 300px; background-color: grey;" id="load_Questions"></div>
                    </section>
                </section>
<!-- ///////////////////////////////////////////////////////////////// -->
                <section class="row" style="margin-top: 10px;">
                    <section style="min-height: 50px;">
                        <input type="button" value="Previous" onclick="loadPrevious();" id="sbmt">
                        <input type="button" value="NEXT" onclick="loadNext();" id="sbmt">
                    </section>
                </section>
<!-- /////////////////////////////////////////////////// -->
            <script type="text/javascript">
                function loadTotalQue(){
                    var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState ==4 && xmlhttp.status ==200){
                        document.getElementById("totalQue").innerHTML=xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET","../AJAX/loadTotalQue.php",true);
                xmlhttp.send(null);
                }
// ////////////////////////////////////////////////////
                var questionno = "1";
                load_Questions(questionno);
// //////////////////////////////////////////////////
                function load_Questions(questionno){
                    document.getElementById("currentQue").innerHTML = questionno;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        if (xmlhttp.responseText == "over") {
                            window.location = "result.php";
                        }
                        else{
                            document.getElementById("load_Questions").innerHTML = xmlhttp.responseText;
                            loadTotalQue();
                        }
                    }
                };
                xmlhttp.open("GET","../AJAX/load_Questions.php?questionno="+ questionno,true);
                xmlhttp.send(null);
                }
// ////////////////////////////////////////////////////////////////////////
                function radioclick(radiovalue,questionno){
                    var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        
                    }
                };
                xmlhttp.open("GET","../AJAX/saveAnswer.php?questionno="+questionno+"&value1="+radiovalue,true);
                xmlhttp.send(null);
                }
// /////////////////////////////////////////////////////////////////
                function loadPrevious(){
                    if (questionno == "1") {
                        load_Questions(questionno);
                    }
                    else{
                        questionno = eval(questionno) - 1;
                        load_Questions(questionno);
                    }
                }
// /////////////////////////////////////////////////////////////
                function loadNext(){
                    questionno = eval(questionno) + 1;
                        load_Questions(questionno);
                }
            </script>
<!-- //////////////////////////////////////////////////////// -->
            <?php include("../FOOTER/adFooter.php"); ?>
    </article>
    </main>
    <footer>
        <p><center><?php include("../FOOTER/footer.php"); ?></center></p>
    </footer>
    </body>
</html>