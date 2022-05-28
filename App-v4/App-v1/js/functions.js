$(document).ready(function () {
  $("#sideMenu").click(function () {
    console.log("You clicked on menu");
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("mySidebar").style.transition = "0.5s";
    document.getElementById("mySidebar").style.width = "100vw";
  });
});
function changeSRC(link) {
  console.log("Given link is: " + link);
  document.getElementById("content").src = link;
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("mySidebar").style.transition = "0.5s";
}
