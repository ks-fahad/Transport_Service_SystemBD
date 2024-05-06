function showMenubar() {
    var m = document.getElementById("menuid");
    if (m.className === "menu") {
        m.className += " responsive";
    } else {
        m.className = "menu";
    }
}
function normal(x, y) {
    var a = document.getElementById(x);
    var b=document.getElementById(y);
    a.style.display = "inline";
    b.style.height = "calc(100% - 65%)";
}
function details(x, y) {
    var a = document.getElementById(x);
    var b=document.getElementById(y);
    a.style.display = "none";
    b.style.height = "100%";
}