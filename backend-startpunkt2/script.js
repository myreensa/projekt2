// Like

function processLike(username) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
           console.log("Succesfully sent request");
           document.getElementById("like-count-" + username).textContent = this.responseText;
        }
    };
    xmlhttp.open("GET", "model_like.php?username=" + username + "&action=like", true);
    xmlhttp.send();
}

//Dislike

function processDislike(username) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
           console.log("Succesfully sent request");
           document.getElementById("like-count-" + username).textContent = this.responseText;
        }
    };
    xmlhttp.open("GET", "model_like.php?username=" + username + "&action=Dislike", true);
    xmlhttp.send();
}









