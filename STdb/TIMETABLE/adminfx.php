<?php
function checklogindetails($dbcon){
if(isset($_SESSION['no'])){
    $n_o = $_SESSION['no'];
    $checkingQuery = "SELECT * from admin where no = '$n_o' limit 1";
    $checkResults = mysqli_query($dbcon,$checkingQuery);
    if($checkResults && mysqli_num_rows($checkResults) > 0){
        $foundDetails = mysqli_fetch_assoc($checkResults);
        return $foundDetails;
        }
    }
}
?>