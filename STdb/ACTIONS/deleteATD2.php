<?php
    require("../CONNECTIONS/teachersConnection.php");
$noo = $_GET['noo'];
$queryDelete = "DELETE FROM atd2 WHERE noo = $noo ";
mysqli_query($con,$queryDelete);
?>
<script>
window.alert("Deleted Successfully.");
window.location.href = "../TEACHERS/admin.php";
</script>
?>