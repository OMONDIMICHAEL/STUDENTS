<?php 
require("../SESSION/session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>virtual school</title>
	<link rel="icon" href="../IMAGES/schoolLogo.jpg" type="image/x-icon">
	<link rel="stylesheet" href="../CSS/teachers.css">
	<script type="text/javascript" src = "../FUNCTIONS/teachersJsFunctions.js"></script>
	<link rel="stylesheet" type="text/css" href="../CSS/timetable.css">
	<script type="text/javascript" src="../FUNCTIONS/timetable.js"></script>
</head>
<body>
	<header>
		<article>
		<?php require("../HEADER/teacherHeader.php"); ?>
			<section id="headerSec">
				<section><button id="headerbtn3" onclick="openSchools()">Timetables. |</button></section>
			</section>
		</article>
		<article id="adminHeaderArt">
			<section id="headerSec">
				<section>
					<button id="sotheaderbtn" class="sotbtn" onclick="openAdminSOT()">
						School of Technology. |
					</button>
				</section>
				<section>
					<button id="sobheaderbtn" class="sobbtn" onclick="openAdminSOB()">
						School of Business.
					</button>
				</section>
			</section>
		</article>
	</header>
	<main>

		<!-- contains all the school of technology courses -->

		<article>
			<section id="sotCourses">
				<button id="sotCoursebtn1" onclick="openAdminDIT()">DIT</button>|
				<button id="sotCoursebtn2" onclick="openAdminCIT()">CIT</button>
			</section>
		</article>

		<!-- contains all the school of biznes courses -->

		<article>
			<section id="sobCourses">
				<button id="sobCoursebtn1" onclick="openAdminMANAGEMENT()">MANAGEMENT.</button>|
				<button id="sobCoursebtn2" onclick="openAdminATD()">ATD.</button>
			</section>
		</article>

		<!-- contains different sections of a course in school of tech -->
		<!-- one instance is DIT -->

		<article>
			<section id="ditStages">
				<button id="ditStage1btn1" onclick="openAdminDIT1tbl()">DIT Stage 1.</button>|
				<button id="ditStage2btn2" onclick="openAdminDIT2tbl()">DIT Stage 2.</button>
			</section>
		</article>

		<!-- another instance is CIT -->

		<article>
			<section id="citStages">
				<button id="citStage1btn1" onclick="openAdminCIT1tbl()">CIT Stage 1.</button>|
				<button id="citStage2btn2" onclick="openAdminCIT2tbl()">CIT Stage 2.</button>
			</section>
		</article>

		<!-- School of busines tbls -->

		<!-- contains different levels of {(management)} in school of biznes -->

		<article>
			<section id="sobManagementLevels">
				<button id="sobManagement1btn1" onclick="openAdminMANAGEMENT1tbl()">MANAGEMENT Level 1.</button>|
				<button id="sobManagement2btn2" onclick="openAdminMANAGEMENT2tbl()">MANAGEMENT Level 2.</button>
			</section>
		</article>

		<!-- contains different levels of {(ATD)} in school of biznes -->

		<article>
			<section id="sobATDLevels">
				<button id="sobATD1btn1" onclick="openAdminATD1tbl()">ATD Level 1.</button>|
				<button id="sobATD2btn2" onclick="openAdminATD2tbl()">ATD Level 2.</button>
			</section>
		</article>


		<!-- uploading dit1 t table is done in this article -->

		<article>
			<section id="addDIT1table">
				<form method="post" action="../ACTIONS/addDIT1table.php">
					<fieldset>
						<legend>DIT Stage 1 Timetable. All The Details Are Required.</legend>
						<label for="no" id="txt">Number.</label><br>
						<input type="text" name="no" id="no" placeholder="1" required class="inputBox"><br><br>
						<label for="day" id="txt">Day.</label><br>
						<input type="text" name="day" id="day" placeholder="Monday" required class="inputBox"><br><br>
						<label for="time" id="txt">Time.</label><br>
						<input type="text" name="time" id="time" placeholder="1400hrs" required class="inputBox"><br><br>
						<label for="room" id="txt">Room.</label><br>
						<input type="text" name="room" id="room" placeholder="lec room 2" required class="inputBox"><br><br>
						<label for="hours" id="txt">Lesson Hours.</label><br>
						<input type="text" name="hours" id="hours" placeholder="3Hrs" required class="inputBox"><br><br>
						<label for="lecname" id="txt">Lecture Name.</label><br>
						<input type="text" name="lecname" id="lecname" placeholder="Dr Bwire" required class="inputBox"><br><br>
						<label for="unitname" id="txt">Unit Name.</label><br>
						<input type="text" name="unitname" id="unitname" placeholder="comm skills" required class="inputBox"><br><br>
						<label for="unitcode" id="txt">Unit Code.</label><br>
						<input type="text" name="unitcode" id="unitcode" placeholder="DIT543" required class="inputBox"><hr>
						<button name="submit" id="submitUser" class="button">Upload Record.</button><br>
					</fieldset>
				</form>
	    		<table border="1" style="overflow-x: scroll;">
	    				<caption>EDIT OR DELETE COLUMNS OF DIT TIMETABLE.</caption>
	    			<thead>
	    				<tr><th>no.</th><th>Day.</th><th>Time.</th><th>Room.</th><th>Hours.</th><th>Lacturer Name.</th><th>Unit Name.</th><th>Unit Code.</th><th>Delete.</th><th>Edit.</th></tr>
	    			</thead>
			    		<?php
							$dit1rowQuery = ("SELECT * FROM dit1");
							$dit1Row = mysqli_query($con,$dit1rowQuery);
							while($allRow = mysqli_fetch_assoc($dit1Row))
							{
								?>
								<tbody>
									<tr>
										<td><?php echo $allRow['no'] ?></td>
										<td><?php echo $allRow['day'] ?></td>
										<td><?php echo $allRow['time'] ?></td>
										<td><?php echo $allRow['room'] ?></td>
										<td><?php echo $allRow['hours'] ?></td>
										<td><?php echo $allRow['lecname'] ?></td>
										<td><?php echo $allRow['unitname'] ?></td>
										<td><?php echo $allRow['unitcode'] ?></td>
										<td><a href="deleteDIT1.php?noo=<?php echo $allRow['noo'] ?>">DELETE.</a> </td>
										<td><a href="javascript:void(0)" onclick="openDIT1edit()">EDIT.</a> </td>
									</tr>
								</tbody>
								<?php
							}
			    		?>
	    		</table>
				<form method="post" action="../ACTIONS/editDIT1table.php" id="editDIT1table">
					<fieldset>
						<legend>EDIT DIT Stage 1 Timetable. ENTER CORRECT NUMBER.</legend>
						<label for="no" id="txt">Number.</label><br>
						<input type="text" name="no" id="no" placeholder="1" required class="inputBox"><br><br>
						<label for="day" id="txt">Day.</label><br>
						<input type="text" name="day" id="day" placeholder="Monday" required class="inputBox"><br><br>
						<label for="time" id="txt">Time.</label><br>
						<input type="text" name="time" id="time" placeholder="1400hrs" required class="inputBox"><br><br>
						<label for="room" id="txt">Room.</label><br>
						<input type="text" name="room" id="room" placeholder="lec room 2" required class="inputBox"><br><br>
						<label for="hours" id="txt">Lesson Hours.</label><br>
						<input type="text" name="hours" id="hours" placeholder="3Hrs" required class="inputBox"><br><br>
						<label for="lecname" id="txt">Lecture Name.</label><br>
						<input type="text" name="lecname" id="lecname" placeholder="Dr Bwire" required class="inputBox"><br><br>
						<label for="unitname" id="txt">Unit Name.</label><br>
						<input type="text" name="unitname" id="unitname" placeholder="comm skills" required class="inputBox"><br><br>
						<label for="unitcode" id="txt">Unit Code.</label><br>
						<input type="text" name="unitcode" id="unitcode" placeholder="DIT543" required class="inputBox"><hr>
						<button name="submit" id="submitUser" class="button">Edit Record.</button><br>
					</fieldset>
				</form>
			</section>
		</article>

		<!-- uploading dit2 t table is done in this article -->

		<article>
			<section id="addDIT2table">
				<form method="post" action="../ACTIONS/addDIT2table.php">
					<fieldset>
						<legend>DIT Stage 2 Timetable. All The Details Are Required.</legend>
						<label for="no" id="txt">Number.</label><br>
						<input type="text" name="no" id="no" placeholder="1" required class="inputBox"><br><br>
						<label for="day" id="txt">Day.</label><br>
						<input type="text" name="day" id="day" placeholder="Monday" required class="inputBox"><br><br>
						<label for="time" id="txt">Time.</label><br>
						<input type="text" name="time" id="time" placeholder="1400hrs" required class="inputBox"><br><br>
						<label for="room" id="txt">Room.</label><br>
						<input type="text" name="room" id="room" placeholder="lec room 2" required class="inputBox"><br><br>
						<label for="hours" id="txt">Lesson Hours.</label><br>
						<input type="text" name="hours" id="hours" placeholder="3Hrs" required class="inputBox"><br><br>
						<label for="lecname" id="txt">Lecture Name.</label><br>
						<input type="text" name="lecname" id="lecname" placeholder="Dr Bwire" required class="inputBox"><br><br>
						<label for="unitname" id="txt">Unit Name.</label><br>
						<input type="text" name="unitname" id="unitname" placeholder="comm skills" required class="inputBox"><br><br>
						<label for="unitcode" id="txt">Unit Code.</label><br>
						<input type="text" name="unitcode" id="unitcode" placeholder="DIT543" required class="inputBox"><hr>
						<button name="submit" id="submitUser" class="button">Upload Record.</button><br>
					</fieldset>
				</form>
	    		<table border="1" style="overflow-x: scroll;">
	    				<caption>EDIT OR DELETE COLUMNS OF DIT2 TIMETABLE.</caption>
	    			<thead>
	    				<tr><th>no.</th><th>Day.</th><th>Time.</th><th>Room.</th><th>Hours.</th><th>Lacturer Name.</th><th>Unit Name.</th><th>Unit Code.</th><th>Delete.</th><th>Edit.</th></tr>
	    			</thead>
			    		<?php
							$dit2rowQuery = ("SELECT * FROM dit2");
							$dit2Row = mysqli_query($con,$dit2rowQuery);
							while($alldit2Row = mysqli_fetch_assoc($dit2Row))
							{
								?>
								<tbody>
									<tr>
										<td><?php echo $alldit2Row['no'] ?></td>
										<td><?php echo $alldit2Row['day'] ?></td>
										<td><?php echo $alldit2Row['time'] ?></td>
										<td><?php echo $alldit2Row['room'] ?></td>
										<td><?php echo $alldit2Row['hours'] ?></td>
										<td><?php echo $alldit2Row['lecname'] ?></td>
										<td><?php echo $alldit2Row['unitname'] ?></td>
										<td><?php echo $alldit2Row['unitcode'] ?></td>
										<td><a href="deleteDIT2.php?noo=<?php echo $alldit2Row['noo'] ?>">DELETE.</a> </td>
										<td><a href="javascript:void(0)" onclick="openDIT2edit()">EDIT.</a> </td>
									</tr>
								</tbody>
								<?php
							}
			    		?>
	    		</table>
				<form method="post" action="../ACTIONS/editDIT2table.php" id="editDIT2table">
					<fieldset>
						<legend>EDIT DIT Stage 1 Timetable. ENTER CORRECT NUMBER.</legend>
						<label for="no" id="txt">Number.</label><br>
						<input type="text" name="no" id="no" placeholder="1" required class="inputBox"><br><br>
						<label for="day" id="txt">Day.</label><br>
						<input type="text" name="day" id="day" placeholder="Monday" required class="inputBox"><br><br>
						<label for="time" id="txt">Time.</label><br>
						<input type="text" name="time" id="time" placeholder="1400hrs" required class="inputBox"><br><br>
						<label for="room" id="txt">Room.</label><br>
						<input type="text" name="room" id="room" placeholder="lec room 2" required class="inputBox"><br><br>
						<label for="hours" id="txt">Lesson Hours.</label><br>
						<input type="text" name="hours" id="hours" placeholder="3Hrs" required class="inputBox"><br><br>
						<label for="lecname" id="txt">Lecture Name.</label><br>
						<input type="text" name="lecname" id="lecname" placeholder="Dr Bwire" required class="inputBox"><br><br>
						<label for="unitname" id="txt">Unit Name.</label><br>
						<input type="text" name="unitname" id="unitname" placeholder="comm skills" required class="inputBox"><br><br>
						<label for="unitcode" id="txt">Unit Code.</label><br>
						<input type="text" name="unitcode" id="unitcode" placeholder="DIT543" required class="inputBox"><hr>
						<button name="submit" id="submitUser" class="button">Edit Record.</button><br>
					</fieldset>
				</form>
			</section>
		</article>

		<!-- uploading cit1 t table is done in this article -->

		<article>
			<section id="addCIT1table">
				<form method="post" action="../ACTIONS/addCIT1table.php">
					<fieldset>
						<legend>CIT Stage 1 Timetable. All The Details Are Required.</legend>
						<label for="no" id="txt">Number.</label><br>
						<input type="text" name="no" id="no" placeholder="1" required class="inputBox"><br><br>
						<label for="day" id="txt">Day.</label><br>
						<input type="text" name="day" id="day" placeholder="Monday" required class="inputBox"><br><br>
						<label for="time" id="txt">Time.</label><br>
						<input type="text" name="time" id="time" placeholder="1400hrs" required class="inputBox"><br><br>
						<label for="room" id="txt">Room.</label><br>
						<input type="text" name="room" id="room" placeholder="lec room 2" required class="inputBox"><br><br>
						<label for="hours" id="txt">Lesson Hours.</label><br>
						<input type="text" name="hours" id="hours" placeholder="3Hrs" required class="inputBox"><br><br>
						<label for="lecname" id="txt">Lecture Name.</label><br>
						<input type="text" name="lecname" id="lecname" placeholder="Dr Bwire" required class="inputBox"><br><br>
						<label for="unitname" id="txt">Unit Name.</label><br>
						<input type="text" name="unitname" id="unitname" placeholder="comm skills" required class="inputBox"><br><br>
						<label for="unitcode" id="txt">Unit Code.</label><br>
						<input type="text" name="unitcode" id="unitcode" placeholder="DIT543" required class="inputBox"><hr>
						<button name="submit" id="submitUser" class="button">Upload Record.</button><br>
					</fieldset>
				</form>
	    		<table border="1" style="overflow-x: scroll;">
	    				<caption>EDIT OR DELETE COLUMNS OF CIT1 TIMETABLE.</caption>
	    			<thead>
	    				<tr><th>no.</th><th>Day.</th><th>Time.</th><th>Room.</th><th>Hours.</th><th>Lacturer Name.</th><th>Unit Name.</th><th>Unit Code.</th><th>Delete.</th><th>Edit.</th></tr>
	    			</thead>
			    		<?php
							$cit1rowQuery = ("SELECT * FROM cit1");
							$cit1Row = mysqli_query($con,$cit1rowQuery);
							while($allcit1Row = mysqli_fetch_assoc($cit1Row))
							{
								?>
								<tbody>
									<tr>
										<td><?php echo $allcit1Row['no'] ?></td>
										<td><?php echo $allcit1Row['day'] ?></td>
										<td><?php echo $allcit1Row['time'] ?></td>
										<td><?php echo $allcit1Row['room'] ?></td>
										<td><?php echo $allcit1Row['hours'] ?></td>
										<td><?php echo $allcit1Row['lecname'] ?></td>
										<td><?php echo $allcit1Row['unitname'] ?></td>
										<td><?php echo $allcit1Row['unitcode'] ?></td>
										<td><a href="deleteCIT1.php?noo=<?php echo $allcit1Row['noo'] ?>">DELETE.</a> </td>
										<td><a href="javascript:void(0)" onclick="openCIT1edit()">EDIT.</a> </td>
									</tr>
								</tbody>
								<?php
							}
			    		?>
	    		</table>
				<form method="post" action="../ACTIONS/editCIT1table.php" id="editCIT1table">
					<fieldset>
						<legend>EDIT CIT Stage 1 Timetable. ENTER CORRECT NUMBER.</legend>
						<label for="no" id="txt">Number.</label><br>
						<input type="text" name="no" id="no" placeholder="1" required class="inputBox"><br><br>
						<label for="day" id="txt">Day.</label><br>
						<input type="text" name="day" id="day" placeholder="Monday" required class="inputBox"><br><br>
						<label for="time" id="txt">Time.</label><br>
						<input type="text" name="time" id="time" placeholder="1400hrs" required class="inputBox"><br><br>
						<label for="room" id="txt">Room.</label><br>
						<input type="text" name="room" id="room" placeholder="lec room 2" required class="inputBox"><br><br>
						<label for="hours" id="txt">Lesson Hours.</label><br>
						<input type="text" name="hours" id="hours" placeholder="3Hrs" required class="inputBox"><br><br>
						<label for="lecname" id="txt">Lecture Name.</label><br>
						<input type="text" name="lecname" id="lecname" placeholder="Dr Bwire" required class="inputBox"><br><br>
						<label for="unitname" id="txt">Unit Name.</label><br>
						<input type="text" name="unitname" id="unitname" placeholder="comm skills" required class="inputBox"><br><br>
						<label for="unitcode" id="txt">Unit Code.</label><br>
						<input type="text" name="unitcode" id="unitcode" placeholder="DIT543" required class="inputBox"><hr>
						<button name="submit" id="submitUser" class="button">Edit Record.</button><br>
					</fieldset>
				</form>
			</section>
		</article>

		<!-- uploading cit2 t table is done in this article -->

		<article>
			<section id="addCIT2table">
				<form method="post" action="../ACTIONS/addCIT2table.php">
					<fieldset>
						<legend>CIT Stage 2 Timetable. All The Details Are Required.</legend>
						<label for="no" id="txt">Number.</label><br>
						<input type="text" name="no" id="no" placeholder="1" required class="inputBox"><br><br>
						<label for="day" id="txt">Day.</label><br>
						<input type="text" name="day" id="day" placeholder="Monday" required class="inputBox"><br><br>
						<label for="time" id="txt">Time.</label><br>
						<input type="text" name="time" id="time" placeholder="1400hrs" required class="inputBox"><br><br>
						<label for="room" id="txt">Room.</label><br>
						<input type="text" name="room" id="room" placeholder="lec room 2" required class="inputBox"><br><br>
						<label for="hours" id="txt">Lesson Hours.</label><br>
						<input type="text" name="hours" id="hours" placeholder="3Hrs" required class="inputBox"><br><br>
						<label for="lecname" id="txt">Lecture Name.</label><br>
						<input type="text" name="lecname" id="lecname" placeholder="Dr Bwire" required class="inputBox"><br><br>
						<label for="unitname" id="txt">Unit Name.</label><br>
						<input type="text" name="unitname" id="unitname" placeholder="comm skills" required class="inputBox"><br><br>
						<label for="unitcode" id="txt">Unit Code.</label><br>
						<input type="text" name="unitcode" id="unitcode" placeholder="DIT543" required class="inputBox"><hr>
						<button name="submit" id="submitUser" class="button">Upload Record.</button><br>
					</fieldset>
				</form>
	    		<table border="1" style="overflow-x: scroll;">
	    				<caption>EDIT OR DELETE COLUMNS OF CIT2 TIMETABLE.</caption>
	    			<thead>
	    				<tr><th>no.</th><th>Day.</th><th>Time.</th><th>Room.</th><th>Hours.</th><th>Lacturer Name.</th><th>Unit Name.</th><th>Unit Code.</th><th>Delete.</th><th>Edit.</th></tr>
	    			</thead>
			    		<?php
							$cit2rowQuery = ("SELECT * FROM cit2");
							$cit2Row = mysqli_query($con,$cit2rowQuery);
							while($allcit2Row = mysqli_fetch_assoc($cit2Row))
							{
								?>
								<tbody>
									<tr>
										<td><?php echo $allcit2Row['no'] ?></td>
										<td><?php echo $allcit2Row['day'] ?></td>
										<td><?php echo $allcit2Row['time'] ?></td>
										<td><?php echo $allcit2Row['room'] ?></td>
										<td><?php echo $allcit2Row['hours'] ?></td>
										<td><?php echo $allcit2Row['lecname'] ?></td>
										<td><?php echo $allcit2Row['unitname'] ?></td>
										<td><?php echo $allcit2Row['unitcode'] ?></td>
										<td><a href="deleteCIT2.php?noo=<?php echo $allcit2Row['noo'] ?>">DELETE.</a> </td>
										<td><a href="javascript:void(0)" onclick="openCIT2edit()">EDIT.</a> </td>
									</tr>
								</tbody>
								<?php
							}
			    		?>
	    		</table>
				<form method="post" action="../ACTIONS/editCIT2table.php" id="editCIT2table">
					<fieldset>
						<legend>EDIT CIT Stage 2 Timetable. ENTER CORRECT NUMBER.</legend>
						<label for="no" id="txt">Number.</label><br>
						<input type="text" name="no" id="no" placeholder="1" required class="inputBox"><br><br>
						<label for="day" id="txt">Day.</label><br>
						<input type="text" name="day" id="day" placeholder="Monday" required class="inputBox"><br><br>
						<label for="time" id="txt">Time.</label><br>
						<input type="text" name="time" id="time" placeholder="1400hrs" required class="inputBox"><br><br>
						<label for="room" id="txt">Room.</label><br>
						<input type="text" name="room" id="room" placeholder="lec room 2" required class="inputBox"><br><br>
						<label for="hours" id="txt">Lesson Hours.</label><br>
						<input type="text" name="hours" id="hours" placeholder="3Hrs" required class="inputBox"><br><br>
						<label for="lecname" id="txt">Lecture Name.</label><br>
						<input type="text" name="lecname" id="lecname" placeholder="Dr Bwire" required class="inputBox"><br><br>
						<label for="unitname" id="txt">Unit Name.</label><br>
						<input type="text" name="unitname" id="unitname" placeholder="comm skills" required class="inputBox"><br><br>
						<label for="unitcode" id="txt">Unit Code.</label><br>
						<input type="text" name="unitcode" id="unitcode" placeholder="DIT543" required class="inputBox"><hr>
						<button name="submit" id="submitUser" class="button">Edit Record.</button><br>
					</fieldset>
				</form>
			</section>
		</article>

		<!-- uploading management1 t table is done in this article -->

		<article>
			<section id="addMANAGEMENT1table">
				<form method="post" action="../ACTIONS/addMANAGEMENT1table.php">
					<fieldset>
						<legend>MANAGEMENT Level 1 Timetable. All The Details Are Required.</legend>
						<label for="no" id="txt">Number.</label><br>
						<input type="text" name="no" id="no" placeholder="1" required class="inputBox"><br><br>
						<label for="day" id="txt">Day.</label><br>
						<input type="text" name="day" id="day" placeholder="Monday" required class="inputBox"><br><br>
						<label for="time" id="txt">Time.</label><br>
						<input type="text" name="time" id="time" placeholder="1400hrs" required class="inputBox"><br><br>
						<label for="room" id="txt">Room.</label><br>
						<input type="text" name="room" id="room" placeholder="lec room 2" required class="inputBox"><br><br>
						<label for="hours" id="txt">Lesson Hours.</label><br>
						<input type="text" name="hours" id="hours" placeholder="3Hrs" required class="inputBox"><br><br>
						<label for="lecname" id="txt">Lecture Name.</label><br>
						<input type="text" name="lecname" id="lecname" placeholder="Dr Bwire" required class="inputBox"><br><br>
						<label for="unitname" id="txt">Unit Name.</label><br>
						<input type="text" name="unitname" id="unitname" placeholder="comm skills" required class="inputBox"><br><br>
						<label for="unitcode" id="txt">Unit Code.</label><br>
						<input type="text" name="unitcode" id="unitcode" placeholder="DIT543" required class="inputBox"><hr>
						<button name="submit" id="submitUser" class="button">Upload Record.</button><br>
					</fieldset>
				</form>
	    		<table border="1" style="overflow-x: scroll;">
	    				<caption>EDIT OR DELETE COLUMNS OF MANAGEMENT 1 TIMETABLE.</caption>
	    			<thead>
	    				<tr><th>no.</th><th>Day.</th><th>Time.</th><th>Room.</th><th>Hours.</th><th>Lacturer Name.</th><th>Unit Name.</th><th>Unit Code.</th><th>Delete.</th><th>Edit.</th></tr>
	    			</thead>
			    		<?php
							$MANAGEMENT1rowQuery = ("SELECT * FROM management1");
							$MANAGEMENT1Row = mysqli_query($con,$MANAGEMENT1rowQuery);
							while($allMANAGEMENT1Row = mysqli_fetch_assoc($MANAGEMENT1Row))
							{
								?>
								<tbody>
									<tr>
										<td><?php echo $allMANAGEMENT1Row['no'] ?></td>
										<td><?php echo $allMANAGEMENT1Row['day'] ?></td>
										<td><?php echo $allMANAGEMENT1Row['time'] ?></td>
										<td><?php echo $allMANAGEMENT1Row['room'] ?></td>
										<td><?php echo $allMANAGEMENT1Row['hours'] ?></td>
										<td><?php echo $allMANAGEMENT1Row['lecname'] ?></td>
										<td><?php echo $allMANAGEMENT1Row['unitname'] ?></td>
										<td><?php echo $allMANAGEMENT1Row['unitcode'] ?></td>
										<td><a href="deleteMANAGEMENT1.php?noo=<?php echo $allMANAGEMENT1Row['noo'] ?>">DELETE.</a> </td>
										<td><a href="javascript:void(0)" onclick="openMANAGEMENT1edit()">EDIT.</a> </td>
									</tr>
								</tbody>
								<?php
							}
			    		?>
	    		</table>
				<form method="post" action="../ACTIONS/editMANAGEMENT1table.php" id="editMANAGEMENT1table">
					<fieldset>
						<legend>EDIT MANAGEMENT 1 Timetable. ENTER CORRECT NUMBER.</legend>
						<label for="no" id="txt">Number.</label><br>
						<input type="text" name="no" id="no" placeholder="1" required class="inputBox"><br><br>
						<label for="day" id="txt">Day.</label><br>
						<input type="text" name="day" id="day" placeholder="Monday" required class="inputBox"><br><br>
						<label for="time" id="txt">Time.</label><br>
						<input type="text" name="time" id="time" placeholder="1400hrs" required class="inputBox"><br><br>
						<label for="room" id="txt">Room.</label><br>
						<input type="text" name="room" id="room" placeholder="lec room 2" required class="inputBox"><br><br>
						<label for="hours" id="txt">Lesson Hours.</label><br>
						<input type="text" name="hours" id="hours" placeholder="3Hrs" required class="inputBox"><br><br>
						<label for="lecname" id="txt">Lecture Name.</label><br>
						<input type="text" name="lecname" id="lecname" placeholder="Dr Bwire" required class="inputBox"><br><br>
						<label for="unitname" id="txt">Unit Name.</label><br>
						<input type="text" name="unitname" id="unitname" placeholder="comm skills" required class="inputBox"><br><br>
						<label for="unitcode" id="txt">Unit Code.</label><br>
						<input type="text" name="unitcode" id="unitcode" placeholder="DIT543" required class="inputBox"><hr>
						<button name="submit" id="submitUser" class="button">Edit Record.</button><br>
					</fieldset>
				</form>
			</section>
		</article>

		<!-- uploading management2 t table is done in this article -->

		<article>
			<section id="addMANAGEMENT2table">
				<form method="post" action="../ACTIONS/addMANAGEMENT2table.php">
					<fieldset>
						<legend>MANAGEMENT Level 2 Timetable. All The Details Are Required.</legend>
						<label for="no" id="txt">Number.</label><br>
						<input type="text" name="no" id="no" placeholder="1" required class="inputBox"><br><br>
						<label for="day" id="txt">Day.</label><br>
						<input type="text" name="day" id="day" placeholder="Monday" required class="inputBox"><br><br>
						<label for="time" id="txt">Time.</label><br>
						<input type="text" name="time" id="time" placeholder="1400hrs" required class="inputBox"><br><br>
						<label for="room" id="txt">Room.</label><br>
						<input type="text" name="room" id="room" placeholder="lec room 2" required class="inputBox"><br><br>
						<label for="hours" id="txt">Lesson Hours.</label><br>
						<input type="text" name="hours" id="hours" placeholder="3Hrs" required class="inputBox"><br><br>
						<label for="lecname" id="txt">Lecture Name.</label><br>
						<input type="text" name="lecname" id="lecname" placeholder="Dr Bwire" required class="inputBox"><br><br>
						<label for="unitname" id="txt">Unit Name.</label><br>
						<input type="text" name="unitname" id="unitname" placeholder="comm skills" required class="inputBox"><br><br>
						<label for="unitcode" id="txt">Unit Code.</label><br>
						<input type="text" name="unitcode" id="unitcode" placeholder="DIT543" required class="inputBox"><hr>
						<button name="submit" id="submitUser" class="button">Upload Record.</button><br>
					</fieldset>
				</form>
	    		<table border="1" style="overflow-x: scroll;">
	    				<caption>EDIT OR DELETE COLUMNS OF MANAGEMENT 2 TIMETABLE.</caption>
	    			<thead>
	    				<tr><th>no.</th><th>Day.</th><th>Time.</th><th>Room.</th><th>Hours.</th><th>Lacturer Name.</th><th>Unit Name.</th><th>Unit Code.</th><th>Delete.</th><th>Edit.</th></tr>
	    			</thead>
			    		<?php
							$MANAGEMENT2rowQuery = ("SELECT * FROM management2");
							$MANAGEMENT2Row = mysqli_query($con,$MANAGEMENT2rowQuery);
							while($allMANAGEMENT2Row = mysqli_fetch_assoc($MANAGEMENT2Row))
							{
								?>
								<tbody>
									<tr>
										<td><?php echo $allMANAGEMENT2Row['no'] ?></td>
										<td><?php echo $allMANAGEMENT2Row['day'] ?></td>
										<td><?php echo $allMANAGEMENT2Row['time'] ?></td>
										<td><?php echo $allMANAGEMENT2Row['room'] ?></td>
										<td><?php echo $allMANAGEMENT2Row['hours'] ?></td>
										<td><?php echo $allMANAGEMENT2Row['lecname'] ?></td>
										<td><?php echo $allMANAGEMENT2Row['unitname'] ?></td>
										<td><?php echo $allMANAGEMENT2Row['unitcode'] ?></td>
										<td><a href="deleteMANAGEMENT2.php?noo=<?php echo $allMANAGEMENT2Row['noo'] ?>">DELETE.</a> </td>
										<td><a href="javascript:void(0)" onclick="openMANAGEMENT2edit()">EDIT.</a> </td>
									</tr>
								</tbody>
								<?php
							}
			    		?>
	    		</table>
				<form method="post" action="../ACTIONS/editMANAGEMENT2table.php" id="editMANAGEMENT2table">
					<fieldset>
						<legend>EDIT MANAGEMENT 2 Timetable. ENTER CORRECT NUMBER.</legend>
						<label for="no" id="txt">Number.</label><br>
						<input type="text" name="no" id="no" placeholder="1" required class="inputBox"><br><br>
						<label for="day" id="txt">Day.</label><br>
						<input type="text" name="day" id="day" placeholder="Monday" required class="inputBox"><br><br>
						<label for="time" id="txt">Time.</label><br>
						<input type="text" name="time" id="time" placeholder="1400hrs" required class="inputBox"><br><br>
						<label for="room" id="txt">Room.</label><br>
						<input type="text" name="room" id="room" placeholder="lec room 2" required class="inputBox"><br><br>
						<label for="hours" id="txt">Lesson Hours.</label><br>
						<input type="text" name="hours" id="hours" placeholder="3Hrs" required class="inputBox"><br><br>
						<label for="lecname" id="txt">Lecture Name.</label><br>
						<input type="text" name="lecname" id="lecname" placeholder="Dr Bwire" required class="inputBox"><br><br>
						<label for="unitname" id="txt">Unit Name.</label><br>
						<input type="text" name="unitname" id="unitname" placeholder="comm skills" required class="inputBox"><br><br>
						<label for="unitcode" id="txt">Unit Code.</label><br>
						<input type="text" name="unitcode" id="unitcode" placeholder="DIT543" required class="inputBox"><hr>
						<button name="submit" id="submitUser" class="button">Edit Record.</button><br>
					</fieldset>
				</form>
			</section>
		</article>

		<!-- uploading atd1 t table is done in this article -->

		<article>
			<section id="addATD1table">
				<form method="post" action="../ACTIONS/addATD1table.php">
					<fieldset>
						<legend>ATD Level 1 Timetable. All The Details Are Required.</legend>
						<label for="no" id="txt">Number.</label><br>
						<input type="text" name="no" id="no" placeholder="1" required class="inputBox"><br><br>
						<label for="day" id="txt">Day.</label><br>
						<input type="text" name="day" id="day" placeholder="Monday" required class="inputBox"><br><br>
						<label for="time" id="txt">Time.</label><br>
						<input type="text" name="time" id="time" placeholder="1400hrs" required class="inputBox"><br><br>
						<label for="room" id="txt">Room.</label><br>
						<input type="text" name="room" id="room" placeholder="lec room 2" required class="inputBox"><br><br>
						<label for="hours" id="txt">Lesson Hours.</label><br>
						<input type="text" name="hours" id="hours" placeholder="3Hrs" required class="inputBox"><br><br>
						<label for="lecname" id="txt">Lecture Name.</label><br>
						<input type="text" name="lecname" id="lecname" placeholder="Dr Bwire" required class="inputBox"><br><br>
						<label for="unitname" id="txt">Unit Name.</label><br>
						<input type="text" name="unitname" id="unitname" placeholder="comm skills" required class="inputBox"><br><br>
						<label for="unitcode" id="txt">Unit Code.</label><br>
						<input type="text" name="unitcode" id="unitcode" placeholder="DIT543" required class="inputBox"><hr>
						<button name="submit" id="submitUser" class="button">Upload Record.</button><br>
					</fieldset>
				</form>
	    		<table border="1" style="overflow-x: scroll;">
	    				<caption>EDIT OR DELETE COLUMNS OF ATD 1 TIMETABLE.</caption>
	    			<thead>
	    				<tr><th>no.</th><th>Day.</th><th>Time.</th><th>Room.</th><th>Hours.</th><th>Lacturer Name.</th><th>Unit Name.</th><th>Unit Code.</th><th>Delete.</th><th>Edit.</th></tr>
	    			</thead>
			    		<?php
							$ATD1rowQuery = ("SELECT * FROM atd1");
							$ATD1Row = mysqli_query($con,$ATD1rowQuery);
							while($allATD1Row = mysqli_fetch_assoc($ATD1Row))
							{
								?>
								<tbody>
									<tr>
										<td><?php echo $allATD1Row['no'] ?></td>
										<td><?php echo $allATD1Row['day'] ?></td>
										<td><?php echo $allATD1Row['time'] ?></td>
										<td><?php echo $allATD1Row['room'] ?></td>
										<td><?php echo $allATD1Row['hours'] ?></td>
										<td><?php echo $allATD1Row['lecname'] ?></td>
										<td><?php echo $allATD1Row['unitname'] ?></td>
										<td><?php echo $allATD1Row['unitcode'] ?></td>
										<td><a href="deleteATD1.php?noo=<?php echo $allATD1Row['noo'] ?>">DELETE.</a> </td>
										<td><a href="javascript:void(0)" onclick="openATD1edit()">EDIT.</a> </td>
									</tr>
								</tbody>
								<?php
							}
			    		?>
	    		</table>
				<form method="post" action="../ACTIONS/editATD1table.php" id="editATD1table">
					<fieldset>
						<legend>EDIT ATD 1 Timetable. ENTER CORRECT NUMBER.</legend>
						<label for="no" id="txt">Number.</label><br>
						<input type="text" name="no" id="no" placeholder="1" required class="inputBox"><br><br>
						<label for="day" id="txt">Day.</label><br>
						<input type="text" name="day" id="day" placeholder="Monday" required class="inputBox"><br><br>
						<label for="time" id="txt">Time.</label><br>
						<input type="text" name="time" id="time" placeholder="1400hrs" required class="inputBox"><br><br>
						<label for="room" id="txt">Room.</label><br>
						<input type="text" name="room" id="room" placeholder="lec room 2" required class="inputBox"><br><br>
						<label for="hours" id="txt">Lesson Hours.</label><br>
						<input type="text" name="hours" id="hours" placeholder="3Hrs" required class="inputBox"><br><br>
						<label for="lecname" id="txt">Lecture Name.</label><br>
						<input type="text" name="lecname" id="lecname" placeholder="Dr Bwire" required class="inputBox"><br><br>
						<label for="unitname" id="txt">Unit Name.</label><br>
						<input type="text" name="unitname" id="unitname" placeholder="comm skills" required class="inputBox"><br><br>
						<label for="unitcode" id="txt">Unit Code.</label><br>
						<input type="text" name="unitcode" id="unitcode" placeholder="DIT543" required class="inputBox"><hr>
						<button name="submit" id="submitUser" class="button">Edit Record.</button><br>
					</fieldset>
				</form>
			</section>
		</article>

		<!-- uploading atd2 t table is done in this article -->

		<article>
			<section id="addATD2table">
				<form method="post" action="../ACTIONS/addATD2table.php">
					<fieldset>
						<legend>ATD Level 2 Timetable. All The Details Are Required.</legend>
						<label for="no" id="txt">Number.</label><br>
						<input type="text" name="no" id="no" placeholder="1" required class="inputBox"><br><br>
						<label for="day" id="txt">Day.</label><br>
						<input type="text" name="day" id="day" placeholder="Monday" required class="inputBox"><br><br>
						<label for="time" id="txt">Time.</label><br>
						<input type="text" name="time" id="time" placeholder="1400hrs" required class="inputBox"><br><br>
						<label for="room" id="txt">Room.</label><br>
						<input type="text" name="room" id="room" placeholder="lec room 2" required class="inputBox"><br><br>
						<label for="hours" id="txt">Lesson Hours.</label><br>
						<input type="text" name="hours" id="hours" placeholder="3Hrs" required class="inputBox"><br><br>
						<label for="lecname" id="txt">Lecture Name.</label><br>
						<input type="text" name="lecname" id="lecname" placeholder="Dr Bwire" required class="inputBox"><br><br>
						<label for="unitname" id="txt">Unit Name.</label><br>
						<input type="text" name="unitname" id="unitname" placeholder="comm skills" required class="inputBox"><br><br>
						<label for="unitcode" id="txt">Unit Code.</label><br>
						<input type="text" name="unitcode" id="unitcode" placeholder="DIT543" required class="inputBox"><hr>
						<button name="submit" id="submitUser" class="button">Upload Record.</button><br>
					</fieldset>
				</form>
	    		<table border="1" style="overflow-x: scroll;">
	    				<caption>EDIT OR DELETE COLUMNS OF ATD 2 TIMETABLE.</caption>
	    			<thead>
	    				<tr><th>no.</th><th>Day.</th><th>Time.</th><th>Room.</th><th>Hours.</th><th>Lacturer Name.</th><th>Unit Name.</th><th>Unit Code.</th><th>Delete.</th><th>Edit.</th></tr>
	    			</thead>
			    		<?php
							$ATD2rowQuery = ("SELECT * FROM atd2");
							$ATD2Row = mysqli_query($con,$ATD2rowQuery);
							while($allATD2Row = mysqli_fetch_assoc($ATD2Row))
							{
								?>
								<tbody>
									<tr>
										<td><?php echo $allATD2Row['no'] ?></td>
										<td><?php echo $allATD2Row['day'] ?></td>
										<td><?php echo $allATD2Row['time'] ?></td>
										<td><?php echo $allATD2Row['room'] ?></td>
										<td><?php echo $allATD2Row['hours'] ?></td>
										<td><?php echo $allATD2Row['lecname'] ?></td>
										<td><?php echo $allATD2Row['unitname'] ?></td>
										<td><?php echo $allATD2Row['unitcode'] ?></td>
										<td><a href="deleteATD2.php?noo=<?php echo $allATD2Row['noo'] ?>">DELETE.</a> </td>
										<td><a href="javascript:void(0)" onclick="openATD2edit()">EDIT.</a> </td>
									</tr>
								</tbody>
								<?php
							}
			    		?>
	    		</table>
				<form method="post" action="../ACTIONS/editATD2table.php" id="editATD2table">
					<fieldset>
						<legend>EDIT ATD 2 Timetable. ENTER CORRECT NUMBER.</legend>
						<label for="no" id="txt">Number.</label><br>
						<input type="text" name="no" id="no" placeholder="1" required class="inputBox"><br><br>
						<label for="day" id="txt">Day.</label><br>
						<input type="text" name="day" id="day" placeholder="Monday" required class="inputBox"><br><br>
						<label for="time" id="txt">Time.</label><br>
						<input type="text" name="time" id="time" placeholder="1400hrs" required class="inputBox"><br><br>
						<label for="room" id="txt">Room.</label><br>
						<input type="text" name="room" id="room" placeholder="lec room 2" required class="inputBox"><br><br>
						<label for="hours" id="txt">Lesson Hours.</label><br>
						<input type="text" name="hours" id="hours" placeholder="3Hrs" required class="inputBox"><br><br>
						<label for="lecname" id="txt">Lecture Name.</label><br>
						<input type="text" name="lecname" id="lecname" placeholder="Dr Bwire" required class="inputBox"><br><br>
						<label for="unitname" id="txt">Unit Name.</label><br>
						<input type="text" name="unitname" id="unitname" placeholder="comm skills" required class="inputBox"><br><br>
						<label for="unitcode" id="txt">Unit Code.</label><br>
						<input type="text" name="unitcode" id="unitcode" placeholder="DIT543" required class="inputBox"><hr>
						<button name="submit" id="submitUser" class="button">Edit Record.</button><br>
					</fieldset>
				</form>
			</section>
		</article>

		<!-- load and search registered users in the article below on a table -->

	</main>
	<footer>
		<article>
			<section>
				Copyright &copy; 2024.
			</section>
		</article>
	</footer>

</body>
</html>