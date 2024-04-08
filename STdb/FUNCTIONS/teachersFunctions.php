<?php
/*<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>*/
function checklogin($con){
if(isset($_SESSION['no'])){
    $n_o = $_SESSION['no'];
    $query = "select * from teachers where no = '$n_o' limit 1";
    $result = mysqli_query($con,$query);
    if($result && mysqli_num_rows($result) > 0){
        $userdata = mysqli_fetch_assoc($result);
        return $userdata;
        }
    }
}
?>