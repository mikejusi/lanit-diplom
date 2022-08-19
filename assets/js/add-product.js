window.onload = function () {
    var box=document.getElementsByClassName('news__shadow');
    var btn=document.getElementById('add-item');
    for (let i=4;i<box.length;i++) {
        box[i].style.display = "none";
    }

    var countD = 4;
    btn.addEventListener("click", function() {
        var box=document.getElementsByClassName('news__shadow');
        countD += 4;
        if (countD <= box.length){
            for(let i=0;i<countD;i++){
                box[i].style.display = "grid";
            }
        }

    })
}