// On window resize adjust sidebar
window.addEventListener("resize", function() {
    document.querySelector(".navigation").removeAttribute("style");
});


// Navigation menu
let navOpen = false;
function toggleNavigation() {
    if (navOpen) {
        // Set the width of the navigation to 0 to hide it
        document.querySelector(".navigation").style.width = "0";
        
    } else {
        // Set the width of the navigation to 60% to show it
        document.querySelector(".navigation").style.width = "100%";
    }

    // Toggle the value of navOpen
    navOpen = !navOpen;
}

// Adjust service dropdown
document.querySelector(".services-arrow").addEventListener("click", function() {
    var dropdown = document.querySelector(".services-dd");
    if (dropdown.style.display === "flex") {
        dropdown.style.display = "none";
    } else {
        dropdown.style.display = "flex";
    }
});
