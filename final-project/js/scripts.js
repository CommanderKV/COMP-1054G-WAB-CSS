// Home page functions
var about = document.querySelector(".about");
var expertise = document.querySelector(".expertise");
var services = document.querySelector(".services");

about.addEventListener("click", function() {
    window.location.href = "about/";
});
expertise.addEventListener("click", function() {
    window.location.href = "expertise.php";
});
services.addEventListener("click", function() {
    window.location.href = "services/";
});