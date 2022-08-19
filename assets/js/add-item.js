    window.onload = function () {
        var box=document.getElementsByClassName('news__shadow');
        var btn=document.getElementById('add-item');
        for (let i=3;i<box.length;i++) {
            box[i].style.display = "none";
        }

        var countD = 3;
        btn.addEventListener("click", function() {
            var box=document.getElementsByClassName('news__shadow');
            countD += 3;
            if (countD <= box.length){
                for(let i=0;i<countD;i++){
                    box[i].style.display = "block";
                }
            }

        })
    }