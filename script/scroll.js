let scrollContainers = document.querySelector(".seasons");
let back = document.getElementById("button-l");
let next = document.getElementById("button-r");

scrollContainers.addEventListener("wheel",(evt) => {
    evt.preventDefault();
    scrollContainers.style.scrollBehavior="smooth";
    scrollContainers.scrollLeft += evt.deltaY;
});

back.addEventListener("click", ()=>{
    scrollContainers.style.scrollBehavior="smooth";
    scrollContainers.scrollLeft-=600;
});
next.addEventListener("click", ()=>{
    scrollContainers.style.scrollBehavior="smooth";
    scrollContainers.scrollLeft+=600;
});

document.addEventListener("DOMContentLoaded", function() {
    var containerep =  document.querySelector(".total-ep-outer");
    var scrollUp =  document.querySelector(".up");
    var scrollDown =  document.querySelector(".down");

    containerep.addEventListener("wheel",(evt) => {
    evt.preventDefault();
    containerep.style.scrollBehavior="smooth";
    containerep.scrollTop += evt.deltaY;
});

scrollUp.addEventListener("click", ()=>{
    containerep.style.scrollBehavior="smooth";
    containerep.scrollTop-=50;
});
scrollDown.addEventListener("click", ()=>{
    containerep.style.scrollBehavior="smooth";
    containerep.scrollTop+=50;
});

});