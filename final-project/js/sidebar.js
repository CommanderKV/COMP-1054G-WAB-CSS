
let navOpen = false;
function toggleNavigation() {
    if (navOpen) {
        // Set the width of the navigation to 0 to hide it
        document.querySelector(".navigation").style.width = "0";
        
    } else {
        // Set the width of the navigation to 60% to show it
        document.querySelector(".navigation").style.width = "60%";
    }

    // Toggle the value of navOpen
    navOpen = !navOpen;
}