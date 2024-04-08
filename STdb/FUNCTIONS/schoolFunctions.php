<?php
/*<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>*/
function checklogin($con){
if(isset($_SESSION['id'])){
    $i_d = $_SESSION['id'];
    $query = "select * from school where id = '$i_d' limit 1";
    $result = mysqli_query($con,$query);
    if($result && mysqli_num_rows($result) > 0){
        $userdata = mysqli_fetch_assoc($result);
        return $userdata;
    }
}
header("Location: schoolLogIn.php");
die;
}
?>