select = document.getElementById('powerlevel');
content = document.getElementById('content');
// window.onload = () => {
//     // content2.style.border = "2px solid black";
//     // content2.style.padding = "10px";
// }
select.onchange = function() {
    content.style.paddingBottom = "15px";
    content.style.border = "2px solid blue";
    if (select.value >= 2 && select.value <= 33) {
        content.innerHTML = "<br>Power Level " + select.value + "!! WOW, you're weak!!";
    } else if (select.value >= 34 && select.value <= 66) {
        content.innerHTML = "<br>Power Level " + select.value + "!! Keep going and you'll get there!!";
    } else {
        content.innerHTML = "<br>Power Level " + select.value + "!! WOW, that's a lot of power!!";
    }
}