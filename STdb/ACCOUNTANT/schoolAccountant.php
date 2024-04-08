<?php include("../SESSION/session.php"); ?>
<?php
/*include_once("../urlScript.php");  
strip_php_extension();*/
?>
    <!DOCTYPE html>
	<html lang="en" dir="ltr">
	<head> 
    <meta charset = "UTF-8">
    <meta name="author" content="mikemike3662@gmail.com">
    <meta name="description" content="This is a virtual school">
<title>
    virtual school.
</title>
<link rel="icon" href="../IMAGES/schoolLogo.jpg" type="image/x-icon">
        <link rel="stylesheet" href="../CSS/schoolAccountant.css">
        <script src = "../FUNCTIONS/teachersJsFunctions.js"></script>
    </head>
    <body>
        <?php require("../HEADER/accountantHeader.php"); ?>
    <div class="bodyContainer">
        <section class="accountForm">
            <form action="../ACTIONS/accountAction.php" method="POST">
                <h>Student Email Address.</h><br>
                <input class="accountInput" type="email" required placeholder="enter address here.." name="studentEmail"><br><br>
                <h>Amount Paid.</h><br>
                <input class="accountInput" type="text" name="paidAmount" placeholder="enter amount paid here" required><br><br>
                <h>Bank Slip No.</h><br>
                <input class="accountInput" type="text" name="slipNumber" placeholder="enter slip No. here" required><br><br>
                <input class="submitAccount" type="submit" value="CONFIRM PAYMENT!">
            </form>
        </section>
<!-- /////////////////////////////////////////// -->
<!-- ////////////////////////////////////////////// -->
<div class="search">
            <!-- ////////////////////////////////////////////////// -->
                        <form id="frm" method="POST" action="schoolAccountant.php">
                            <input type="text" placeholder="enter student email" class="searchBox" name="search">
                            <button name="submit" class="searchButton" >
                                    SEARCH.
                            </button>
                        </form>
                        <!-- //////////////////////////////////////////// -->
                <div class="searchTable"><br><br>
                            <table border="2" class = "libTable">
            <?php
                            if(isset($_POST['submit'])){
                                $search = $_POST['search'];
                                if(empty($search)){
                                    echo 'Enter student email address!!';
                                    die;
                                }
                                $sql = "SELECT * FROM ditFeeAccount WHERE studentEmail LIKE '%$search%'";
                                $results = mysqli_query($con,$sql);
                                if ($results) {
                                    if (mysqli_num_rows($results)>0) {
                                        echo ' <thead>
                                        <tr>
                                        <th colspan="4">All Payments Made so Far...</th>
                                        </tr>
                                       <tr>
                                        <th>Student Email.</th>
                                        <th>Amount Paid.</th>
                                        <th>Slip No.</th>
                                        <th>Date.</th>
                                       </tr>
                                        </thead>
                                        ' ;
                                        while($row = mysqli_fetch_assoc($results)){
                                        echo " <tbody>
                                        <tr>
                                         <td>".$row['studentEmail']."</td>
                                         <td>".$row['Paid']."</td>
                                         <td>".$row['slipNumber']."</td>
                                         <td>".$row['Date']."</td>
                                    </tr>
                                    </tbody> " ;
                                        }
                                    }
                                    else{
                                        echo "No Result FOUND!!";
                                    }
                                }
                            }
            ?>
                            </table>
            </div><hr><hr>
        </div>        
<!-- ///////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////// -->
                <div class="totalDitPaid">
                    <table border="1">
                        <tr>
                            <th>
                            Student Email.
                        </th>
                        <th>
                            Amount Paid.
                        </th>
                        <th>
                            Slip Number.
                        </th>
                        <th>
                            Date.
                        </th>
                        </tr>
                        <?php
                            $queryAcc = "SELECT * FROM ditFeeAccount";
                            $accData = mysqli_query($con,$queryAcc);
                            $totalAcc = mysqli_num_rows($accData);
                            if ($totalAcc != 0)
                            {
                                while ($accResult = mysqli_fetch_assoc($accData))
                                {
                                    echo "
                                    <tr>
                                    <th>".$accResult['studentEmail']."</th>
                                    <td>ksh ".$accResult['Paid']."</td>
                                    <td>".$accResult['slipNumber']."</td>
                                    <td>".$accResult['Date']."</td>
                                    </tr>
                                    ";
                                }
                            }
                            else 
                            echo "SORRY, NOTHING RECORDED YET.";
                        ?>
                    </table>
                </div>
        <?php include("../FOOTER/adFooter.php"); ?>
    </div>
    <p><center><?php include("../FOOTER/footer.php"); ?></center></p>
</body>
</html>