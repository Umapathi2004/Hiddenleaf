let temptittle = document.title;   //How to change uppercase title toLowercase.....
temptittle = temptittle.split("");
console.log(temptittle)
var i=0;
let tittle = temptittle.map((str) =>{
    if(temptittle[i]==str){
        i=undefined;
        return str.toUpperCase();
    }
    else{
        return str.toLowerCase();
    }
})
document.title=(tittle.join(''));
function myFunction1(){
    var x = document.getElementById("myDIV1");
    if (x.style.width==="100vw"){
        x.style.width="0";
    }
    else{
        x.style.width="100vw";
    }
}
function myFunction2(){
    var y = document.getElementById("myDIV2");
    if (y.style.height==="50px"){
        y.style.height="auto";
    }
    else{
        y.style.height="50px";
    }
}
function myFunction3(){
    var y = document.getElementById("myDIV3");
    if (y.style.height==="50px"){
        y.style.height="auto";
    }
    else{
        y.style.height="50px";
    }

    var y = document.getElementById("angle2");
    if (y.style.transform==="rotate(0deg)"){
        y.style.transform="rotate(90deg)";
    }
    else{
        y.style.transform="rotate(0deg)";
    }
}
function myFunction4(){
    var y = document.getElementById("myDIV4");
    if (y.style.height==="50px"){
        y.style.height="auto";
    }
    else{
        y.style.height="50px";
    }

    var y = document.getElementById("angle3");
    if (y.style.transform==="rotate(0deg)"){
        y.style.transform="rotate(90deg)";
    }
    else{
        y.style.transform="rotate(0deg)";
    }
}
function myFunction5(){
    var y = document.getElementById("myDIV5");
    if (y.style.height==="50px"){
        y.style.height="auto";
    }
    else{
        y.style.height="50px";
    }

    var y = document.getElementById("angle4");
    if (y.style.transform==="rotate(0deg)"){
        y.style.transform="rotate(90deg)";
    }
    else{
        y.style.transform="rotate(0deg)";
    }
}
function myFunction6(){
    var y = document.getElementById("myDIV6");
    if (y.style.height==="50px"){
        y.style.height="auto";
    }
    else{
        y.style.height="50px";
    }

    var y = document.getElementById("angle5");
    if (y.style.transform==="rotate(0deg)"){
        y.style.transform="rotate(90deg)";
    }
    else{
        y.style.transform="rotate(0deg)";
    }
}
function myFunction7(){
    var y = document.getElementById("myDIV7");
    if (y.style.height==="50px"){
        y.style.height="auto";
    }
    else{
        y.style.height="50px";
    }

    var y = document.getElementById("angle6");
    if (y.style.transform==="rotate(0deg)"){
        y.style.transform="rotate(90deg)";
    }
    else{
        y.style.transform="rotate(0deg)";
    }
}
function myFunction8(){
    var y = document.getElementById("myDIV8");
    if (y.style.height==="50px"){
        y.style.height="auto";
    }
    else{
        y.style.height="50px";
    }

    var y = document.getElementById("angle7");
    if (y.style.transform==="rotate(0deg)"){
        y.style.transform="rotate(90deg)";
    }
    else{
        y.style.transform="rotate(0deg)";
    }
}
let scrollContainer = document.querySelector(".trending-container");
let backBtn = document.getElementById("arrow-l");
let nextBtn = document.getElementById("arrow-r");

scrollContainer.addEventListener("wheel",(evt) => {
    evt.preventDefault();
    scrollContainer.style.scrollBehavior="smooth";
    scrollContainer.scrollLeft += evt.deltaY;
});

backBtn.addEventListener("click", ()=>{
    scrollContainer.style.scrollBehavior="smooth";
    scrollContainer.scrollLeft-=268.5;
});
nextBtn.addEventListener("click", ()=>{
    scrollContainer.style.scrollBehavior="smooth";
    scrollContainer.scrollLeft+=268.5;
});


    