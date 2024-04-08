    /*<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>*/   
function printCoursework() {
        var tableCoursework = document.getElementById('printTable');
        newWin = window.open("");
        newWin.document.write(tableCoursework.outerHTML);
        newWin.print();
        newWin.close();
   }
// //////////////////////////////////////////////////////
function darkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
    }
    // //////////////////////////////////////////////////////////
function myFunction() {
    var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
            }
        else {
            x.type = "password";
            }
   }
// ll///////////////////////////////////////////////////////
function openTsap() {
    window.open('https://wa.me/+254726658032?text=hey%20fahm,%20social%20is%20boom');
}
// ////////////////////////////////////////////////
function startCat1(){
    var countDownDate2 = new Date("Nov 24, 2023 11:40:00").getTime();
    var now2 = new Date().getTime();
    // var distance2 = countDownDate2 - now2;
    if (countDownDate2  > now2) {
        alert("Cat not started yet");
    }
    else if (countDownDate2  < now2) {
        window.location="../STUDENT/networkingCat1.php"
    }
}
// ///////////////////////////////////////////////
function startCPACat1(){
    var countDownDate = new Date("Nov 24, 2023 11:40:00").getTime();
    var now = new Date().getTime();
    // var distance2 = countDownDate2 - now2;
    if (countDownDate  > now) {
        alert("Cat not started yet");
    }
    else if (countDownDate  < now) {
        window.location="../STUDENT/cpaCat1.php"
    }
}
// ///////////////////////////////////////////////////
function startCat2(){
    var countDownDate2 = new Date("Nov 24, 2023 11:40:00").getTime();
    var now2 = new Date().getTime();
    // var distance2 = countDownDate2 - now2;
    if (countDownDate2  > now2) {
        alert("Cat not started yet");
    }
    else if (countDownDate2  < now2) {
        window.location="../STUDENT/networkingCat2.php"
    }
}
// ///////////////////////////////////////////////
function startCPACat2(){
    var countDownDate = new Date("Nov 24, 2023 11:40:00").getTime();
    var now = new Date().getTime();
    // var distance2 = countDownDate2 - now2;
    if (countDownDate  > now) {
        alert("Cat not started yet");
    }
    else if (countDownDate  < now) {
        window.location="../STUDENT/cpaCat2.php"
    }
}
// ///////////////////////////////////////////////////
// function myFunction2(){
//     document.getElementById("myDropdown").classList.toggle("show");
// }
// window.onclick = function(event){
//     if(!event.target.matches('.dropbtn')){
//         var dropdowns = document.getElementsByClassName("dropdown-content");
//         var i;
//         for (i = 0; i < dropdowns.length; i++){
//             var openDropdown = dropdowns[i];
//             if (openDropdown.classList.contains('show')) {
//                 openDropdown.classList.remove('show');
//             }
//         }
//     }
// }
   function openUserRoom() {
    window.location.href = "../STUDENT/userChartRoom.php";
   }
   function openCreateUserRoom(params) {
    document.getElementById("createRoomArticle").style.display = "block";
    document.getElementById("joinRoomArticle").style.display = "none";
   }

   function openJoinUserRoom(params) {
    document.getElementById("joinRoomArticle").style.display = "block";
    document.getElementById("createRoomArticle").style.display = "none";
   }