function OnClickTab() {
    var nav_drop_down_1 = document.getElementById("nav-dropdown-1");
    if (nav_drop_down_1.style.display != "block") { nav_drop_down_1.style.display = "block"; } else { nav_drop_down_1.style.display = "none"; }
}

function OnClickAbout() {
    var nav_drop_down_2 = document.getElementById("nav-dropdown-2");
    if (nav_drop_down_2.style.display != "block") { nav_drop_down_2.style.display = "block"; } else { nav_drop_down_2.style.display = "none"; }
}

window.onresize = function () {
    if (window.innerWidth > 900) {
        var nav_drop_down_1 = document.getElementById("nav-dropdown-1");
        var nav_drop_down_2 = document.getElementById("nav-dropdown-2");
        nav_drop_down_1.style.display = "none";
        nav_drop_down_2.style.display = "none";
    }
}


function OnNavigation(n) {
    console.log(n);
    switch (n) {
        case (0):
            window.location = "./index.php";
            break;
        case (1):
            window.location = "./aboutme.php";
            break;
        case (2):
            window.location = "./contactme.php";
            break;
        case (3):
            break;
        default:
            break;
    }
}