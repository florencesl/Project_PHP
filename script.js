function showPage(pageId) {
    // Hide all pages
    var pages = document.getElementsByClassName("content");
    for (var i = 0; i < pages.length; i++) {
        pages[i].style.display = "none";
    }
    // Show the selected page
    document.getElementById(pageId).style.display = "block";
}