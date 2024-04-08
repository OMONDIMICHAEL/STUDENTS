/*<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>
<<<<<<<<<<<*mikemike3662@gmail.com*>>>>>>>>>>>>*/
function darkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
        }

function myFunction() {
    var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
            }
        else {
            x.type = "password";
            }
   }
   function openRoom() {
    window.location.href = "../TEACHERS/adminChartRoom.php";
   }

   function openCreateRoom(params) {
    document.getElementById("createRoomArticle").style.display = "block";
    document.getElementById("joinRoomArticle").style.display = "none";
   }

   function openJoinRoom(params) {
    document.getElementById("joinRoomArticle").style.display = "block";
    document.getElementById("createRoomArticle").style.display = "none";
   }