<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitions" "http://www.w3.org/TR/xhtml1/DTD/xhtml-transitional.dtd">
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Notes.
        </title>
        <link rel="stylesheet" href="teachers.css">
    </head>
<body>
    <div>
        <?php
       
        include 'teachersConnection.php';
        
        $sql = "SELECT teacherFile from teachersnotesupload";

        $query=mysqli_query ($con,$sql);
        
        while ($info = mysqli_fetch_array($query)){
        ?>
        <embed type = "application/pdf" src = "TeacherFile" <?php echo $info['teacherFile']; ?> width = "800" height = "600">

        <?php
        }

        ?>
    </div>
</body>
</html>