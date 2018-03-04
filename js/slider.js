
let countOfelements = document.getElementsByClassName('element').length;
let blocked = false;

for(let i = 1; i<countOfelements;i++){
    document.getElementsByClassName('element')[i].style.display='none';
}

let indexNext= 1;




function changePicReverse() {
    if(blocked){
        let interval = setInterval(function () {
            if(!blocked) clearInterval(interval);
        },10)
    }else{
        blocked=true;
        document.getElementsByClassName('element')[indexNext-1].style.opacity = '0';
        let prev =0;
        setTimeout(function () {
            document.getElementsByClassName('element')[indexNext-1].style.display = 'none';
            console.log(indexNext);
            if(indexNext===1)
                indexNext = countOfelements-1;
            else
                indexNext--;
            document.getElementsByClassName('element')[indexNext-1].style.display = 'block';
            document.getElementsByClassName('element')[indexNext-1].style.opacity = '1';
            blocked=false;
        },200);
    }
};

function changePic(direction) {
    if(blocked){
        let interval = setInterval(function () {
            if(!blocked) clearInterval(interval);
        },10)
    }else {

        blocked=true;
        if (indexNext < countOfelements) {
            // console.log('changing from '+indexNext);
            document.getElementsByClassName('element')[indexNext - direction].style.opacity = '0';
            setTimeout(function () {
                document.getElementsByClassName('element')[indexNext - direction].style.display = 'none';
                document.getElementsByClassName('element')[indexNext].style.display = 'block';
                setTimeout(function () {
                    document.getElementsByClassName('element')[indexNext].style.opacity = '1';
                    indexNext += direction;
                })
            }, 200);


        } else {
            indexNext = 0;
            // console.log('changing from '+indexNext);
            document.getElementsByClassName('element')[countOfelements - 1].style.opacity = '0';
            setTimeout(function () {
                document.getElementsByClassName('element')[countOfelements - 1].style.display = 'none';
                document.getElementsByClassName('element')[indexNext].style.display = 'block';
                setTimeout(function () {
                    document.getElementsByClassName('element')[indexNext].style.opacity = '1';
                    indexNext += direction;
                })
            }, 200);

            if (direction < 0) {
                document.getElementsByClassName()
            }
        }
        console.log('pic changed');
        blocked=false;
    }
}
//main cycle
setInterval(function(){
    changePic(1)
},5000);