console.log("Dashboad Script");
const sidemenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");

menuBtn.addEventListener("click", () => {
  sidemenu.style.display = "block";
});

closeBtn.addEventListener("click", () => {
  sidemenu.style.display = "none";
});

let buttons = document.querySelectorAll(".sidebarA");
buttons.forEach((button) => {
  button.addEventListener("click", function () {
    buttons.forEach((btn) => btn.classList.remove("active"));
    this.classList.add("active");
  });
});
