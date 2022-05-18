const sidemenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");

menuBtn.addEventListener("click", () => {
  sidemenu.style.display = "block";
});

closeBtn.addEventListener("click", () => {
  sidemenu.style.display = "none";
});

$(".sidebarA").click(function (e) {
  $(".sidebarA").removeClass("active");
  $(this).addClass("active");
});
