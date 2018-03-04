
let interval1 =setInterval(function () {
    if(document.readyState === "complete"){
        document.getElementById('content').style.visibility='visible';
        document.getElementById('footer').style.visibility='visible';
        document.getElementById('preloader').style.display='none';
        clearInterval(interval1);
    }
},10);