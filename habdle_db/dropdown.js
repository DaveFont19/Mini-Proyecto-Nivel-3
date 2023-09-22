function toggleDropdown() {
    let dropdown = document.getElementById("myDropdown");
    if (dropdown.style.display === "block") {
        dropdown.style.display = "none";
    } else {
        dropdown.style.display = "block";
    }
}

window.onclick = function (event) {
    if (!event.target.matches('.dropdown img')) {
        let dropdown = document.getElementById("myDropdown");
        if (dropdown.style.display === "block") {
            dropdown.style.display = "none";
        }
    }
}