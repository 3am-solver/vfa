$(document).ready(function () {
  // Activating Loading screen on every page load
  // loadLoader();
  console.log("Window Loaded Succesfully");

  // Mobile Responsive Button
  const sidemenu = document.querySelector("aside");
  const menuBtn = document.querySelector("#menu-btn");
  const closeBtn = document.querySelector("#close-btn");
  const link = "http://localhost/vfa";
  menuBtn.addEventListener("click", () => {
    sidemenu.style.display = "block";
  });

  closeBtn.addEventListener("click", () => {
    sidemenu.style.display = "none";
  });
  // setting Active class on sidebar
  current_link = window.location.href;
  // console.log(current_link);
  if (current_link === "http://localhost/vfa/app/home/") {
    $("#home").addClass("active");
  }
  if (current_link === "http://localhost/vfa/app/weather/") {
    $("#weather").addClass("active");
  }
  if (current_link == "http://localhost/vfa/app/account/") {
    $("#account").addClass("active");
  }
  if (current_link == "http://localhost/vfa/app/community/") {
    $("#community").addClass("active");
  }
  if (current_link == "http://localhost/vfa/app/blog/") {
    $("#blog").addClass("active");
  }

  // Toggeling Select New Crop Section
  $("#add-new-farm-data").click(() => {
    console.log("You clicked add-new-crop section");
    loadLoader();
    $(".select-crop-section").css("display", "block");
  });

  $(".btn-previous").click(() => {
    console.log("you clicked on Previous Button...");
  });

  $(".crop-item").click(() => {
    console.log("you clicked crop-item");
    $(".date-of-sowing").css("display", "block");
  });

  // Load Loader Function
  function loadLoader() {
    $(".loader-container").addClass("loadShow");
    setTimeout(function () {
      $(".loader-container").addClass("done loadHide");
      $(".lprogress").addClass("done");
      $(".loader-container").removeClass("loadShow");
    }, 2000);
  }
});
