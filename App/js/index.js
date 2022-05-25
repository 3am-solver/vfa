$(document).ready(function () {
  const sidemenu = document.querySelector("aside");
  const menuBtn = document.querySelector("#menu-btn");
  const closeBtn = document.querySelector("#close-btn");

  menuBtn.addEventListener("click", () => {
    sidemenu.style.display = "block";
  });

  closeBtn.addEventListener("click", () => {
    sidemenu.style.display = "none";
  });
  // setting Active class on sidebar
  current_url = window.location.href;
  // console.log(current_url);
  if (current_url == "http://localhost/vfa/app/home/") {
    $("#home").addClass("active");
  }
  if (current_url == "http://localhost/vfa/app/weather/") {
    $("#weather").addClass("active");
  }
  if (current_url == "http://localhost/vfa/app/account/") {
    $("#account").addClass("active");
  }
  if (current_url == "http://localhost/vfa/app/community/") {
    $("#community").addClass("active");
  }
  if (current_url == "http://localhost/vfa/app/blog/") {
    $("#blog").addClass("active");
  }

  // Toggeling Select New Crop Section
  $("#add-new-farm-data").click(() => {
    console.log("You clicked add-new-crop section");
    $(".select-crop-section").css("display", "block");
  });

  $(".btn-previous").click(() => {
    console.log("you clicked on Previous Button...");
  });

  $(".crop-item").click(() => {
    console.log("you clicked crop-item");
    $(".date-of-sowing").css("display", "block");
  });
});
