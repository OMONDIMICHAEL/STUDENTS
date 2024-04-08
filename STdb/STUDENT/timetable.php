<?php 
require("../SESSION/session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>mytimetable</title>
	<link rel="icon" type="image/x-icon" href="title.jpg">
	<link rel="stylesheet" type="text/css" href="../CSS/timetable.css">
	<script type="text/javascript" src="../FUNCTIONS/timetable.js"></script>
        <link rel="stylesheet" href="../CSS/students.css">
        <script src = "../FUNCTIONS/studentsJsFunctions.js"></script>
</head>
<body>

	<!-- header to act like a nav/menu bar -->

	<header>
	<?php require("../HEADER/studentHeader.php"); ?>
		<article id="headerArt">
			<section id="headerSec">
				<section>
					<button id="headerbtn1" class="sotbtn" onclick="openSOT()">
						School of Technology. |
					</button>
				</section>
				<section>
					<button id="headerbtn2" class="sobbtn" onclick="openSOB()">
						School of Business.
					</button>
				</section>
			</section>
		</article>
	</header>

	<!-- main to put all the major body components -->

	<main>

		<!-- contains all the school of tech courses -->

		<article>
			<section id="sotCourses">
				<button id="sotCoursebtn1" onclick="openDIT()">DIT</button>|
				<button id="sotCoursebtn2" onclick="openCIT()">CIT</button>
			</section>
		</article>

		<!-- contains all the school of biznes courses -->

		<article>
			<section id="sobCourses">
				<button id="sobCoursebtn1" onclick="openMANAGEMENT()">MANAGEMENT.</button>|
				<button id="sobCoursebtn2" onclick="openATD()">ATD.</button>
			</section>
		</article>

		<!-- contains different sections of a course in school of tech -->
		<!-- one instance is DIT -->

		<article>
			<section id="ditStages">
				<button id="ditStage1btn1" onclick="openDIT1tbl()">DIT Stage 1.</button>|
				<button id="ditStage2btn2" onclick="openDIT2tbl()">DIT Stage 2.</button>|
			</section>
		</article>

		<!-- another instance is CIT -->

		<article>
			<section id="citStages">
				<button id="citStage1btn1" onclick="openCIT1tbl()">CIT Stage 1.</button>|
				<button id="citStage2btn2" onclick="openCIT2tbl()">CIT Stage 2.</button>|
			</section>
		</article>

		<!-- displays dit stage1 timetable on a table -->

		<article>
			<section id="ditStage1table">
				<button id="btnPrint" onclick="downloaddit1Ttable()">Download this timetable.</button>
				<table border="1" id="dit1Ttable">
					<caption>
						Stage 1: Diploma In Information Technology.
					</caption>
					<?php
						$selectDIT1 =("SELECT * FROM dit1");
						$selected = mysqli_query($con, $selectDIT1);
						$selectedResult = mysqli_num_rows($selected);
						if($selectedResult > 0)
						{
							echo '
							<thead>
								<tr>
									<th>NO.</th><th>DAY.</th><th>TIME.</th><th>ROOM.</th><th>HOURS.</th><th>LECTURE NAME.</th><th>UNIT NAME.</th><th>UNIT CODE.</th>
								</tr>
							</thead>
							';
							while ($selectedRow = mysqli_fetch_assoc($selected))
							{
								echo "
							<tbody>
								<tr>
									<td>".$selectedRow['no']."</td><td>".$selectedRow['day']."</td><td>".$selectedRow['time']."</td><td>".$selectedRow['room']."</td><td>".$selectedRow['hours'].".</td><td>".$selectedRow['lecname']."</td><td>".$selectedRow['unitname']."</td><td>".$selectedRow['unitcode']."</td>
								</tr>
							</tbody>
								";
							}
						}
					?>
				</table>
			</section>
		</article>

		<!-- displays dit stage 2 timetable on a table -->

		<article>
			<section id="ditStage2table">
				<button id="btnPrint" onclick="downloaddit2Ttable()">Download this timetable.</button>
				<table border="1" id="dit2Ttable">
					<caption>
						Stage 2: Diploma In Information Technology.
					</caption>
					<?php
						$selectDIT2 =("SELECT * FROM dit2");
						$DIT2selected = mysqli_query($con, $selectDIT2);
						$DIT2selectedResult = mysqli_num_rows($DIT2selected);
						if($DIT2selectedResult > 0)
						{
							echo '
							<thead>
								<tr>
									<th>NO.</th><th>DAY.</th><th>TIME.</th><th>ROOM.</th><th>HOURS.</th><th>LECTURE NAME.</th><th>UNIT NAME.</th><th>UNIT CODE.</th>
								</tr>
							</thead>
							';
							while ($DIT2selectedRow = mysqli_fetch_assoc($DIT2selected))
							{
								echo "
							<tbody>
								<tr>
									<td>".$DIT2selectedRow['no']."</td><td>".$DIT2selectedRow['day']."</td><td>".$DIT2selectedRow['time']."</td><td>".$DIT2selectedRow['room']."</td><td>".$DIT2selectedRow['hours'].".</td><td>".$DIT2selectedRow['lecname']."</td><td>".$DIT2selectedRow['unitname']."</td><td>".$DIT2selectedRow['unitcode']."</td>
								</tr>
							</tbody>
								";
							}
						}
					?>
				</table>
			</section>
		</article>

		<!-- displays cit stage1 timetable on a table -->

		<article>
			<section id="citStage1table">
				<button id="btnPrint" onclick="downloadcit1Ttable()">Download this timetable.</button>
				<table border="1" id="cit1Ttable">
					<caption>
						Stage 1: Certificate In Information Technology.
					</caption>
					<?php
						$selectCIT1 =("SELECT * FROM cit1");
						$CIT1selected = mysqli_query($con, $selectCIT1);
						$CIT1selectedResult = mysqli_num_rows($CIT1selected);
						if($CIT1selectedResult > 0)
						{
							echo '
							<thead>
								<tr>
									<th>NO.</th><th>DAY.</th><th>TIME.</th><th>ROOM.</th><th>HOURS.</th><th>LECTURE NAME.</th><th>UNIT NAME.</th><th>UNIT CODE.</th>
								</tr>
							</thead>
							';
							while ($CIT1selectedRow = mysqli_fetch_assoc($CIT1selected))
							{
								echo "
							<tbody>
								<tr>
									<td>".$CIT1selectedRow['no']."</td><td>".$CIT1selectedRow['day']."</td><td>".$CIT1selectedRow['time']."</td><td>".$CIT1selectedRow['room']."</td><td>".$CIT1selectedRow['hours'].".</td><td>".$CIT1selectedRow['lecname']."</td><td>".$CIT1selectedRow['unitname']."</td><td>".$CIT1selectedRow['unitcode']."</td>
								</tr>
							</tbody>
								";
							}
						}
					?>
				</table>
			</section>
		</article>

		<!-- displays cit stage 2 timetable on a table -->

		<article>
			<section id="citStage2table">
				<button id="btnPrint" onclick="downloadcit2Ttable()">Download this timetable.</button>
				<table border="1" id="cit2Ttable">
					<caption>
						Stage 2: Certificate In Information Technology.
					</caption>
					<?php
						$selectCIT2 =("SELECT * FROM cit2");
						$CIT2selected = mysqli_query($con, $selectCIT2);
						$CIT2selectedResult = mysqli_num_rows($CIT2selected);
						if($CIT2selectedResult > 0)
						{
							echo '
							<thead>
								<tr>
									<th>NO.</th><th>DAY.</th><th>TIME.</th><th>ROOM.</th><th>HOURS.</th><th>LECTURE NAME.</th><th>UNIT NAME.</th><th>UNIT CODE.</th>
								</tr>
							</thead>
							';
							while ($CIT2selectedRow = mysqli_fetch_assoc($CIT2selected))
							{
								echo "
							<tbody>
								<tr>
									<td>".$CIT2selectedRow['no']."</td><td>".$CIT2selectedRow['day']."</td><td>".$CIT2selectedRow['time']."</td><td>".$CIT2selectedRow['room']."</td><td>".$CIT2selectedRow['hours'].".</td><td>".$CIT2selectedRow['lecname']."</td><td>".$CIT2selectedRow['unitname']."</td><td>".$CIT2selectedRow['unitcode']."</td>
								</tr>
							</tbody>
								";
							}
						}
					?>
				</table>
			</section>
		</article>

		<!-- School of busines starts here -->

		<!-- contains different levels of a course {(management)} in school of biznes -->

		<article>
			<section id="sobManagementLevels">
				<button id="sobManagement1btn1" onclick="openMANAGEMENT1tbl()">MANAGEMENT Level 1.</button>|
				<button id="sobManagement2btn2" onclick="openMANAGEMENT2tbl()">MANAGEMENT Level 2.</button>|
			</section>
		</article>

		<!-- contains different levels of a course {(ATD)} in school of biznes -->

		<article>
			<section id="sobATDLevels">
				<button id="sobATD1btn1" onclick="openATD1tbl()">ATD Level 1.</button>|
				<button id="sobATD2btn2" onclick="openATD2tbl()">ATD Level 2.</button>|
			</section>
		</article>

		<!-- sob management levels timetable -->

		<!-- displays sob level1 timetable on a table -->

		<article>
			<section id="sobManagement1table">
				<button id="btnPrint" onclick="downloadmanagement1Ttable()">Download this timetable.</button>
				<table border="1" id="management1Ttable">
					<caption>
						Level 1: Management.
					</caption>
					<?php
						$selectMANAGEMENT1 =("SELECT * FROM management1");
						$MANAGEMENT1selected = mysqli_query($con, $selectMANAGEMENT1);
						$MANAGEMENT1selectedResult = mysqli_num_rows($MANAGEMENT1selected);
						if($MANAGEMENT1selectedResult > 0)
						{
							echo '
							<thead>
								<tr>
									<th>NO.</th><th>DAY.</th><th>TIME.</th><th>ROOM.</th><th>HOURS.</th><th>LECTURE NAME.</th><th>UNIT NAME.</th><th>UNIT CODE.</th>
								</tr>
							</thead>
							';
							while ($MANAGEMENT1selectedRow = mysqli_fetch_assoc($MANAGEMENT1selected))
							{
								echo "
							<tbody>
								<tr>
									<td>".$MANAGEMENT1selectedRow['no']."</td><td>".$MANAGEMENT1selectedRow['day']."</td><td>".$MANAGEMENT1selectedRow['time']."</td><td>".$MANAGEMENT1selectedRow['room']."</td><td>".$MANAGEMENT1selectedRow['hours'].".</td><td>".$MANAGEMENT1selectedRow['lecname']."</td><td>".$MANAGEMENT1selectedRow['unitname']."</td><td>".$MANAGEMENT1selectedRow['unitcode']."</td>
								</tr>
							</tbody>
								";
							}
						}
					?>
				</table>
			</section>
		</article>

		<!-- displays sob management level 2 timetable on a table -->

		<article>
			<section id="sobManagement2table">
				<button id="btnPrint" onclick="downloadmanagement2Ttable()">Download this timetable.</button>
				<table border="1" id="management2Ttable">
					<caption>
						Level 2: MANAGEMENT.
					</caption>
					<?php
						$selectMANAGEMENT2 =("SELECT * FROM management2");
						$MANAGEMENT2selected = mysqli_query($con, $selectMANAGEMENT2);
						$MANAGEMENT2selectedResult = mysqli_num_rows($MANAGEMENT2selected);
						if($MANAGEMENT2selectedResult > 0)
						{
							echo '
							<thead>
								<tr>
									<th>NO.</th><th>DAY.</th><th>TIME.</th><th>ROOM.</th><th>HOURS.</th><th>LECTURE NAME.</th><th>UNIT NAME.</th><th>UNIT CODE.</th>
								</tr>
							</thead>
							';
							while ($MANAGEMENT2selectedRow = mysqli_fetch_assoc($MANAGEMENT2selected))
							{
								echo "
							<tbody>
								<tr>
									<td>".$MANAGEMENT2selectedRow['no']."</td><td>".$MANAGEMENT2selectedRow['day']."</td><td>".$MANAGEMENT2selectedRow['time']."</td><td>".$MANAGEMENT2selectedRow['room']."</td><td>".$MANAGEMENT2selectedRow['hours'].".</td><td>".$MANAGEMENT2selectedRow['lecname']."</td><td>".$MANAGEMENT2selectedRow['unitname']."</td><td>".$MANAGEMENT2selectedRow['unitcode']."</td>
								</tr>
							</tbody>
								";
							}
						}
					?>
				</table>
			</section>
		</article>

		<!-- sob ATD levels timetable -->

		<!-- displays sob ATD level1 timetable on a table -->

		<article>
			<section id="sobATD1table">
				<button id="btnPrint" onclick="downloadatd1Ttable()">Download this timetable.</button>
				<table border="1" id="atd1Ttable">
					<caption>
						Level 1: ATD.
					</caption>
					<?php
						$selectATD1 =("SELECT * FROM atd1");
						$ATD1selected = mysqli_query($con, $selectATD1);
						$ATD1selectedResult = mysqli_num_rows($ATD1selected);
						if($ATD1selectedResult > 0)
						{
							echo '
							<thead>
								<tr>
									<th>NO.</th><th>DAY.</th><th>TIME.</th><th>ROOM.</th><th>HOURS.</th><th>LECTURE NAME.</th><th>UNIT NAME.</th><th>UNIT CODE.</th>
								</tr>
							</thead>
							';
							while ($ATD1selectedRow = mysqli_fetch_assoc($ATD1selected))
							{
								echo "
							<tbody>
								<tr>
									<td>".$ATD1selectedRow['no']."</td><td>".$ATD1selectedRow['day']."</td><td>".$ATD1selectedRow['time']."</td><td>".$ATD1selectedRow['room']."</td><td>".$ATD1selectedRow['hours'].".</td><td>".$ATD1selectedRow['lecname']."</td><td>".$ATD1selectedRow['unitname']."</td><td>".$ATD1selectedRow['unitcode']."</td>
								</tr>
							</tbody>
								";
							}
						}
					?>
				</table>
			</section>
		</article>

		<!-- displays sob ATD level 2 timetable on a table -->

		<article>
			<section id="sobATD2table">
				<button id="btnPrint" onclick="downloadatd2Ttable()">Download this timetable.</button>
				<table border="1" id="atd2Ttable">
					<caption>
						Level 2: ATD.
					</caption>
					<?php
						$selectATD2 =("SELECT * FROM atd2");
						$ATD2selected = mysqli_query($con, $selectATD2);
						$ATD2selectedResult = mysqli_num_rows($ATD2selected);
						if($ATD2selectedResult > 0)
						{
							echo '
							<thead>
								<tr>
									<th>NO.</th><th>DAY.</th><th>TIME.</th><th>ROOM.</th><th>HOURS.</th><th>LECTURE NAME.</th><th>UNIT NAME.</th><th>UNIT CODE.</th>
								</tr>
							</thead>
							';
							while ($ATD2selectedRow = mysqli_fetch_assoc($ATD2selected))
							{
								echo "
							<tbody>
								<tr>
									<td>".$ATD2selectedRow['no']."</td><td>".$ATD2selectedRow['day']."</td><td>".$ATD2selectedRow['time']."</td><td>".$ATD2selectedRow['room']."</td><td>".$ATD2selectedRow['hours'].".</td><td>".$ATD2selectedRow['lecname']."</td><td>".$ATD2selectedRow['unitname']."</td><td>".$ATD2selectedRow['unitcode']."</td>
								</tr>
							</tbody>
								";
							}
						}
					?>
				</table>
			</section>
		</article>
	</main>

	<!-- footer to place sth like an overview of this application -->

	<footer>
		<section>
            <center>Copyright &copy; 2024.</center>
        </section>
	</footer>

</body>
</html>