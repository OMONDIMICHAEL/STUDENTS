<!DOCTYPE html> 
<head>
<title>
    asign.
</title> 
<link rel="stylesheet" href="display.css">   
</head>
<html>
    <body>
        <h1>
            <u>
            asign record.
            </u>
        </h1>
      <table border = "2">
        <tr>
            <th>
                file.
            </th>
        </tr>
      

<?php
include("studentsConnection.php");

$query = "select * from studentsassignmentupload";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);

if ($total != 0)
{
    while ($result = mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['studentFile']."</td>
        </tr>
        ";
    }
}
else 
echo "SORRY, NO RECORD FOUND IN THE DATABASE";



?>
</table>  
    </body>
</html>