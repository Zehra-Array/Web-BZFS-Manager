
/* Shindow v0.9 */
/* 3D Info-Boxes with shadow and transparency */
/* To use as an infobox or a dropdown-menu */
/* *** *** 2007 (c) Cobra_Fast/Doenemeier.de *** *** */
var sid = null;

function getPosition(e) {
    e = e || window.event;
    var cursor = {x:0, y:0};
    if (e.pageX || e.pageY) {
        cursor.x = e.pageX;
        cursor.y = e.pageY;
    } 
    else {
        var de = document.documentElement;
        var b = document.body;
        cursor.x = e.clientX + 
            (de.scrollLeft || b.scrollLeft) - (de.clientLeft || 0);
        cursor.y = e.clientY + 
            (de.scrollTop || b.scrollTop) - (de.clientTop || 0);
    }
    return cursor;
}

function infobox ( id ) {
 sid = id;
 document.getElementById(id).style.visibility = "visible";
 document.onmouseover = setpos;
}

function setpos (e) {
 document.getElementById(sid).style.left = e.pageX;
 document.getElementById(sid).style.top = e.pageY;
}

function hidebox ( id ) {
 document.getElementById(id).style.visibility = "hidden";
}

function showmenu ( id, l, t, twidth ) {
 document.getElementById(id).style.visibility = "visible";
 document.getElementById(id).style.left = l;
 document.getElementById(id).style.top = t;
}
function hidemenu ( id ) {
 document.getElementById(id).style.visibility = "hidden";
}


