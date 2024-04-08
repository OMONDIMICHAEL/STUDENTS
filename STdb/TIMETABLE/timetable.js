function openSOT(){
	document.getElementById("sobATD2table").style.display = "none";
	document.getElementById("sobATD1table").style.display = "none";
	document.getElementById("sobATDLevels").style.display = "none";
	document.getElementById("sobManagement2table").style.display = "none";
	document.getElementById("sobManagement1table").style.display = "none";
	document.getElementById("sobManagementLevels").style.display = "none";
	document.getElementById("sobCourses").style.display = "none";
	document.getElementById("sotCourses").style.display = "block";
	document.getElementById("headerbtn1").style.color = "red";
	document.getElementById("headerbtn2").style.color = "black";
}
function openSOB(){
	document.getElementById("citStage1table").style.display = "none";
	document.getElementById("citStage2table").style.display = "none";
	document.getElementById("citStages").style.display = "none";
	document.getElementById("ditStage1table").style.display = "none";
	document.getElementById("ditStage2table").style.display = "none";
	document.getElementById("ditStages").style.display = "none";
	document.getElementById("sotCourses").style.display = "none";
	document.getElementById("sobCourses").style.display = "block";
	document.getElementById("headerbtn2").style.color = "red";
	document.getElementById("headerbtn1").style.color = "black";
}
function openDIT(){
	document.getElementById("citStage1table").style.display = "none";
	document.getElementById("citStage2table").style.display = "none";
	document.getElementById("citStages").style.display = "none";
	document.getElementById("ditStages").style.display = "block";
	document.getElementById("sotCoursebtn1").style.color = "red";
	document.getElementById("sotCoursebtn2").style.color = "black";
}
function openCIT(){
	document.getElementById("ditStage1table").style.display = "none";
	document.getElementById("ditStage2table").style.display = "none";
	document.getElementById("ditStages").style.display = "none";
	document.getElementById("citStages").style.display = "block";
	document.getElementById("sotCoursebtn2").style.color = "red";
	document.getElementById("sotCoursebtn1").style.color = "black";
}
function openDIT1tbl(){
	document.getElementById("ditStage2table").style.display = "none";
	document.getElementById("ditStage1table").style.display = "block";
	document.getElementById("ditStage1btn1").style.color = "red";
	document.getElementById("ditStage2btn2").style.color = "black";
}
function openDIT2tbl(){
	document.getElementById("ditStage1table").style.display = "none";
	document.getElementById("ditStage2table").style.display = "block";
	document.getElementById("ditStage2btn2").style.color = "red";
	document.getElementById("ditStage1btn1").style.color = "black";
}

// cit timetables

function openCIT1tbl(){
	document.getElementById("citStage2table").style.display = "none";
	document.getElementById("citStage1table").style.display = "block";
	document.getElementById("citStage1btn1").style.color = "red";
	document.getElementById("citStage2btn2").style.color = "black";
}
function openCIT2tbl(){
	document.getElementById("citStage1table").style.display = "none";
	document.getElementById("citStage2table").style.display = "block";
	document.getElementById("citStage2btn2").style.color = "red";
	document.getElementById("citStage1btn1").style.color = "black";
}

//  school of biznes js starts here

// open management different levels

function openMANAGEMENT(){
	document.getElementById("sobATD2table").style.display = "none";
	document.getElementById("sobATD1table").style.display = "none";
	document.getElementById("sobATDLevels").style.display = "none";
	document.getElementById("sobManagementLevels").style.display = "block";
	document.getElementById("sobCoursebtn1").style.color = "red";
	document.getElementById("sobCoursebtn2").style.color = "black";
}

// sob management timetables

// sob management level1 timetable

function openMANAGEMENT1tbl(){
	document.getElementById("sobManagement2table").style.display = "none";
	document.getElementById("sobManagement1table").style.display = "block";
	document.getElementById("sobManagement1btn1").style.color = "red";
	document.getElementById("sobManagement2btn2").style.color = "black";
}

// sob management level2 timetable

function openMANAGEMENT2tbl(){
	document.getElementById("sobManagement2table").style.display = "block";
	document.getElementById("sobManagement1table").style.display = "none";
	document.getElementById("sobManagement2btn2").style.color = "red";
	document.getElementById("sobManagement1btn1").style.color = "black";
}

// sob ATD timetables

// open management different levels

function openATD(){
	document.getElementById("sobManagement2table").style.display = "none";
	document.getElementById("sobManagement1table").style.display = "none";
	document.getElementById("sobATDLevels").style.display = "block";
	document.getElementById("sobManagementLevels").style.display = "none";
	document.getElementById("sobCoursebtn2").style.color = "red";
	document.getElementById("sobCoursebtn1").style.color = "black";
}

// sob ATD level1 timetable

function openATD1tbl(){
	document.getElementById("sobATD2table").style.display = "none";
	document.getElementById("sobATD1table").style.display = "block";
	document.getElementById("sobATD1btn1").style.color = "red";
	document.getElementById("sobATD2btn2").style.color = "black";
}

// sob ATD level2 timetable

function openATD2tbl(){
	document.getElementById("sobATD2table").style.display = "block";
	document.getElementById("sobATD1table").style.display = "none";
	document.getElementById("sobATD2btn2").style.color = "red";
	document.getElementById("sobATD1btn1").style.color = "black";
}

// end of tables
// begining of db ## login x sign in x details

function logout(){
	location.href = ("logout.php");
}

// admin fxs starts here

// open the users article
function openRegUser(){
	document.getElementById("sobATDLevels").style.display = "none";
	document.getElementById("sobManagementLevels").style.display = "none";
	document.getElementById("addCIT1table").style.display = "none";
	document.getElementById("addCIT2table").style.display = "none";
	document.getElementById("addDIT2table").style.display = "none";
	document.getElementById("addDIT1table").style.display = "none";
	document.getElementById("addATD2table").style.display = "none";
	document.getElementById("addATD1table").style.display = "none";
	document.getElementById("addMANAGEMENT2table").style.display = "none";
	document.getElementById("addMANAGEMENT1table").style.display = "none";
	document.getElementById("ditStages").style.display = "none";
	document.getElementById("citStages").style.display = "none";
	document.getElementById("sotCourses").style.display = "none";
	document.getElementById("sobCourses").style.display = "none";
	document.getElementById("adminHeaderArt").style.display = "none";
	document.getElementById("regUser").style.display = "block";
	document.getElementById("loadUsers").style.display = "none";
	document.getElementById("headerbtn3").style.color = "black";
	document.getElementById("headerbtn1").style.color = "red";
	document.getElementById("headerbtn2").style.color = "black";
}

// open the view users article
function openViewUsers(){
	document.getElementById("sobCourses").style.display = "none";
	document.getElementById("sotCourses").style.display = "none";
	document.getElementById("addCIT1table").style.display = "none";
	document.getElementById("addCIT2table").style.display = "none";
	document.getElementById("addDIT2table").style.display = "none";
	document.getElementById("addDIT1table").style.display = "none";
	document.getElementById("addATD2table").style.display = "none";
	document.getElementById("addATD1table").style.display = "none";
	document.getElementById("addMANAGEMENT2table").style.display = "none";
	document.getElementById("addMANAGEMENT1table").style.display = "none";
	document.getElementById("sobATDLevels").style.display = "none";
	document.getElementById("sobManagementLevels").style.display = "none";
	document.getElementById("ditStages").style.display = "none";
	document.getElementById("citStages").style.display = "none";
	document.getElementById("adminHeaderArt").style.display = "none";
	document.getElementById("loadUsers").style.display = "block";
	document.getElementById("regUser").style.display = "none";
	document.getElementById("headerbtn3").style.color = "black";
	document.getElementById("headerbtn2").style.color = "red";
	document.getElementById("headerbtn1").style.color = "black";
}

// open admin schools
function openSchools(){
	document.getElementById("sobCourses").style.display = "none";
	document.getElementById("addCIT1table").style.display = "none";
	document.getElementById("addCIT2table").style.display = "none";
	document.getElementById("addDIT2table").style.display = "none";
	document.getElementById("addDIT1table").style.display = "none";
	document.getElementById("addATD2table").style.display = "none";
	document.getElementById("addATD1table").style.display = "none";
	document.getElementById("addMANAGEMENT2table").style.display = "none";
	document.getElementById("addMANAGEMENT1table").style.display = "none";
	document.getElementById("regUser").style.display = "none";
	document.getElementById("loadUsers").style.display = "none";
	document.getElementById("adminHeaderArt").style.display = "block";
	document.getElementById("headerbtn3").style.color = "red";
	document.getElementById("headerbtn2").style.color = "black";
	document.getElementById("headerbtn1").style.color = "black";
}

// open admin sot courses
function openAdminSOT(){
	document.getElementById("sobATDLevels").style.display = "none";
	document.getElementById("sotCourses").style.display = "none";
	document.getElementById("ditStages").style.display = "none";
	document.getElementById("citStages").style.display = "none";
	document.getElementById("addCIT1table").style.display = "none";
	document.getElementById("addCIT2table").style.display = "none";
	document.getElementById("addDIT2table").style.display = "none";
	document.getElementById("addDIT1table").style.display = "none";
	document.getElementById("addATD2table").style.display = "none";
	document.getElementById("addATD1table").style.display = "none";
	document.getElementById("addMANAGEMENT2table").style.display = "none";
	document.getElementById("addMANAGEMENT1table").style.display = "none";
	document.getElementById("sobManagementLevels").style.display = "none";
	document.getElementById("sobCourses").style.display = "none";
	document.getElementById("sotCourses").style.display = "block";
	document.getElementById("sotheaderbtn").style.color = "red";
	document.getElementById("sobheaderbtn").style.color = "black";
}

function openAdminSOB(){
	document.getElementById("ditStages").style.display = "none";
	document.getElementById("citStages").style.display = "none";
	document.getElementById("addMANAGEMENT2table").style.display = "none";
	document.getElementById("addMANAGEMENT1table").style.display = "none";
	document.getElementById("addATD1table").style.display = "none";
	document.getElementById("addATD2table").style.display = "none";
	document.getElementById("addCIT2table").style.display = "none";
	document.getElementById("addCIT1table").style.display = "none";
	document.getElementById("addDIT2table").style.display = "none";
	document.getElementById("addDIT1table").style.display = "none";
	document.getElementById("sobCourses").style.display = "block";
	document.getElementById("sotCourses").style.display = "none";
	document.getElementById("sotheaderbtn").style.color = "black";
	document.getElementById("sobheaderbtn").style.color = "red";
}
// admin logout fx
function adminLogoutt(){
	location.href = ("adminLogout.php");
}

function openAdminDIT(){
	document.getElementById("addCIT1table").style.display = "none";
	document.getElementById("addCIT2table").style.display = "none";
	document.getElementById("addDIT2table").style.display = "none";
	document.getElementById("addDIT1table").style.display = "none";
	document.getElementById("addATD2table").style.display = "none";
	document.getElementById("addATD1table").style.display = "none";
	document.getElementById("addMANAGEMENT2table").style.display = "none";
	document.getElementById("addMANAGEMENT1table").style.display = "none";
	document.getElementById("sobCourses").style.display = "none";
	document.getElementById("ditStages").style.display = "block";
	document.getElementById("citStages").style.display = "none";
	document.getElementById("sotCoursebtn2").style.color = "black";
	document.getElementById("sotCoursebtn1").style.color = "red";
}

function openAdminCIT(){
	document.getElementById("addCIT1table").style.display = "none";
	document.getElementById("addCIT2table").style.display = "none";
	document.getElementById("addDIT2table").style.display = "none";
	document.getElementById("addDIT1table").style.display = "none";
	document.getElementById("addATD2table").style.display = "none";
	document.getElementById("addATD1table").style.display = "none";
	document.getElementById("addMANAGEMENT2table").style.display = "none";
	document.getElementById("addMANAGEMENT1table").style.display = "none";
	document.getElementById("sobCourses").style.display = "none";
	document.getElementById("citStages").style.display = "block";
	document.getElementById("ditStages").style.display = "none";
	document.getElementById("sotCoursebtn1").style.color = "black";
	document.getElementById("sotCoursebtn2").style.color = "red";
}

function openAdminMANAGEMENT(){
	document.getElementById("addCIT1table").style.display = "none";
	document.getElementById("addCIT2table").style.display = "none";
	document.getElementById("addDIT2table").style.display = "none";
	document.getElementById("addDIT1table").style.display = "none";
	document.getElementById("addATD2table").style.display = "none";
	document.getElementById("addATD1table").style.display = "none";
	document.getElementById("addMANAGEMENT2table").style.display = "none";
	document.getElementById("addMANAGEMENT1table").style.display = "none";
	document.getElementById("ditStages").style.display = "none";
	document.getElementById("citStages").style.display = "none";
	document.getElementById("sobATDLevels").style.display = "none";
	document.getElementById("sobManagementLevels").style.display = "block";
	document.getElementById("sobCoursebtn2").style.color = "black";
	document.getElementById("sobCoursebtn1").style.color = "red";
}

function openAdminATD(){
	document.getElementById("addCIT1table").style.display = "none";
	document.getElementById("addCIT2table").style.display = "none";
	document.getElementById("addDIT2table").style.display = "none";
	document.getElementById("addDIT1table").style.display = "none";
	document.getElementById("addATD2table").style.display = "none";
	document.getElementById("addATD1table").style.display = "none";
	document.getElementById("addMANAGEMENT2table").style.display = "none";
	document.getElementById("addMANAGEMENT1table").style.display = "none";
	document.getElementById("sobManagementLevels").style.display = "none";
	document.getElementById("ditStages").style.display = "none";
	document.getElementById("citStages").style.display = "none";
	document.getElementById("sobATDLevels").style.display = "block";
	document.getElementById("sobCoursebtn1").style.color = "black";
	document.getElementById("sobCoursebtn2").style.color = "red";
}

function openAdminMANAGEMENT1tbl(){
	document.getElementById("editMANAGEMENT1table").style.display = "none";
	document.getElementById("addMANAGEMENT2table").style.display = "none";
	document.getElementById("addMANAGEMENT1table").style.display = "block";
	document.getElementById("sobManagement2btn2").style.color = "black";
	document.getElementById("sobManagement1btn1").style.color = "red";
}

function openAdminMANAGEMENT2tbl(){
	document.getElementById("editMANAGEMENT2table").style.display = "none";
	document.getElementById("addMANAGEMENT1table").style.display = "none";
	document.getElementById("addMANAGEMENT2table").style.display = "block";
	document.getElementById("sobManagement1btn1").style.color = "black";
	document.getElementById("sobManagement2btn2").style.color = "red";
}

function openAdminATD1tbl(){
	document.getElementById("editATD1table").style.display = "none";
	document.getElementById("addATD2table").style.display = "none";
	document.getElementById("addATD1table").style.display = "block";
	document.getElementById("sobATD2btn2").style.color = "black";
	document.getElementById("sobATD1btn1").style.color = "red";
}

function openAdminATD2tbl(){
	document.getElementById("editATD2table").style.display = "none";
	document.getElementById("addATD1table").style.display = "none";
	document.getElementById("addATD2table").style.display = "block";
	document.getElementById("sobATD1btn1").style.color = "black";
	document.getElementById("sobATD2btn2").style.color = "red";
}

function openAdminDIT1tbl(){
	document.getElementById("editDIT1table").style.display = "none";
	document.getElementById("addDIT2table").style.display = "none";
	document.getElementById("addDIT1table").style.display = "block";
	document.getElementById("ditStage1btn1").style.color = "red";
	document.getElementById("ditStage2btn2").style.color = "black";
}

function openAdminDIT2tbl(){
	document.getElementById("editDIT2table").style.display = "none";
	document.getElementById("addDIT1table").style.display = "none";
	document.getElementById("addDIT2table").style.display = "block";
	document.getElementById("ditStage2btn2").style.color = "red";
	document.getElementById("ditStage1btn1").style.color = "black";
}

function openAdminCIT1tbl(){
	document.getElementById("editCIT1table").style.display = "none";
	document.getElementById("addCIT2table").style.display = "none";
	document.getElementById("addCIT1table").style.display = "block";
	document.getElementById("citStage1btn1").style.color = "red";
	document.getElementById("citStage2btn2").style.color = "black";
}

function openAdminCIT2tbl(){
	document.getElementById("editCIT2table").style.display = "none";
	document.getElementById("addCIT1table").style.display = "none";
	document.getElementById("addCIT2table").style.display = "block";
	document.getElementById("citStage2btn2").style.color = "red";
	document.getElementById("citStage1btn1").style.color = "black";
}

function openDIT1edit(){
	document.getElementById("editDIT1table").style.display = "block";
}
function openDIT2edit(){
	document.getElementById("editDIT2table").style.display = "block";
}
function openCIT1edit(){
	document.getElementById("editCIT1table").style.display = "block";
}
function openCIT2edit(){
	document.getElementById("editCIT2table").style.display = "block";
}
function openATD1edit(){
	document.getElementById("editATD1table").style.display = "block";
}
function openATD2edit(){
	document.getElementById("editATD2table").style.display = "block";
}
function openMANAGEMENT1edit(){
	document.getElementById("editMANAGEMENT1table").style.display = "block";
}
function openMANAGEMENT2edit(){
	document.getElementById("editMANAGEMENT2table").style.display = "block";
}
function downloaddit1Ttable() {
    var dit1Ttable = document.getElementById('dit1Ttable');
    newWin = window.open("");
    newWin.document.write(dit1Ttable.outerHTML);
    newWin.print();
    newWin.close();
}
function downloaddit2Ttable() {
    var dit2Ttable = document.getElementById('dit2Ttable');
    newWin = window.open("");
    newWin.document.write(dit2Ttable.outerHTML);
    newWin.print();
    newWin.close();
}
function downloadcit1Ttable() {
    var cit1Ttable = document.getElementById('cit1Ttable');
    newWin = window.open("");
    newWin.document.write(cit1Ttable.outerHTML);
    newWin.print();
    newWin.close();
}
function downloadatd1Ttable() {
    var atd1Ttable = document.getElementById('atd1Ttable');
    newWin = window.open("");
    newWin.document.write(atd1Ttable.outerHTML);
    newWin.print();
    newWin.close();
}
function downloadatd2Ttable() {
    var atd2Ttable = document.getElementById('atd2Ttable');
    newWin = window.open("");
    newWin.document.write(atd2Ttable.outerHTML);
    newWin.print();
    newWin.close();
}
function downloadmanagement1Ttable() {
    var management1Ttable = document.getElementById('management1Ttable');
    newWin = window.open("");
    newWin.document.write(management1Ttable.outerHTML);
    newWin.print();
    newWin.close();
}
function downloadmanagement2Ttable() {
    var management2Ttable = document.getElementById('management2Ttable');
    newWin = window.open("");
    newWin.document.write(management2Ttable.outerHTML);
    newWin.print();
    newWin.close();
}
function downloadcit1Ttable() {
    var cit1Ttable = document.getElementById('Cit1Ttable');
    newWin = window.open("");
    newWin.document.write(cit1Ttable.outerHTML);
    newWin.print();
    newWin.close();
}