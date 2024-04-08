<?php require("../SESSION/session.php"); ?>
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
        <script src = "../FUNCTIONS/studentsJsFunctions.js"></script>
    </head>
    <body>
        <!-- /////////////////////////////////////////////////// -->
        <header><?php require("../HEADER/studentHeader.php"); ?></header>
        <!-- //////////////////////////////////////////////////// -->
        <main>
    <article class="bodyContainer">
        <!-- ///////////////////////////////////////////////// -->
                    <?php
                    $userdata = checklogin($con);
                    $myEmail = $userdata['Email'];
                    $myCourse = $userdata['courseName'];
                    //nooooooooooooooooooooooooooot yyyyyyyyyyyyyyet oveeeeeeeeer
                    $querySum = "SELECT SUM(Paid) AS paid_sum FROM ditFeeAccount where studentEmail = '$myEmail'";
                    $dataSum = mysqli_query($con,$querySum);
                    //$totalSum = mysqli_num_rows($dataSum);
                    $sumInfo = mysqli_fetch_assoc($dataSum);
                    $d = $sumInfo['paid_sum'];
                    // //////////////////////////////////////
                    $queryFee = "SELECT * FROM totalBilled where courseName = '$myCourse'";
                    $fee = mysqli_query($con,$queryFee);
                    //$totalSum = mysqli_num_rows($dataSum);
                    $feeInfo = mysqli_fetch_assoc($fee);
                    $amont = $feeInfo['amount'];
                    // /////////////////////////////////////
                    //nooooooooooooooooooooooooooot yyyyyyyyyyyyyyet oveeeeeeeeer(:
                    ?>
                <section class="totalBilled">
                    <table border="1">
                        <tr>
                            <th>
                            Total Billed.
                        </th>
                        <th>
                            Total Paid.
                        </th>
                        <th>
                            Balance.
                        </th>
                        </tr>
                        <tr>
                            <th>
                                <?php echo "ksh ",$amont; ?>
                            </th>
                            <td>
                                <?php echo "ksh ",$d; ?>
                            </td>
                            <td>
                                <?php echo "ksh ",$amont - $d; ?>
                            </td>
                        </tr>
                    </table>
                </section>
                <!-- //////////////////////////////////////////////////////// -->
                    <button id= "sbmt" onclick='printCoursework()'>Print Payments.</button>
                <!-- //////////////////////////////////////////////////// -->
            
        <section id="printTable">
                <table border = "1">
                    <caption>
                        <image src="../IMAGES/schoolLogo.jpg" class="schoolLogo" alt="logo" onclick="show()" id="logoIcon">
                    </caption>
                    <tr>
                        <th>
                            Your Email.
                        </th>
                        <th>
                            Amount paid.
                        </th>
                        <th>
                            Bank Slip Number.
                        </th>
                        <th>
                            Date Recorded.
                        </th>
                    </tr>
                        <?php
                            $query = "SELECT * FROM ditFeeAccount where studentEmail = '$myEmail'";
                            $data = mysqli_query($con,$query);
                            $total = mysqli_num_rows($data);
                            if ($total != 0)
                            {
                                while ($result = mysqli_fetch_assoc($data))
                                {
                                    echo "
                                    <tr>
                                    <th>".$result['studentEmail']."</th>
                                    <td>ksh ".$result['Paid']."</td>
                                    <td>".$result['slipNumber']."</td>
                                    <td>".$result['Date']."</td>
                                    </tr>
                                    ";
                                }
                            }
                            else 
                            echo "SORRY, NOTHING RECORDED YET.";
                        ?>
                    <tr>
                <table>
                    <tr>
                    <tr>
                        <td colspan="6">
                            <p>
                                <?php
                                    echo "STUDENT NAME:    "; echo $userdata['Username']; 
                                ?>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6"><br><br><p><?php
                                    echo "School Accountant:";?></p></td>
                    </tr>
                    <tr><br><br>
                        <td colspan="6"><br><br>
                            <p>
                                <?php
                                    echo "Sign:......................";
                                ?>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6"><br><br>
                            <p>
                                <?php
                                    echo "Date: ",date("d-m-Y");
                                ?>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6"><br><br>
                            <p>
                                <?php
                                    echo "Stamp:...........................";
                                ?>
                            </p>
                        </td>
                    </tr>
                </table>
                    </tr>
                </table>
        </section>
        <!-- ////////////////////////////////////////////////////////////// -->
                <?php require("../FOOTER/adFooter.php"); ?>
    </article>
    </main>
    <footer>
        <p><center><?php require("../FOOTER/footer.php"); ?></center></p>
    </footer>
    </body>
</html>