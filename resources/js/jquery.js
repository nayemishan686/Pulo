//Sticky menu
window.addEventListener('scroll', function(){
    let navbar = document.getElementById('myNav');

    if(window.pageYOffset >= 300){
        navbar.classList.add('sticky');
    }else{
        navbar.classList.remove('sticky');
    }

});







function openNav(){
    document.getElementById("my-nav").style.width = "100%";
}
function closeNav(){
    document.getElementById("my-nav").style.width = "0%";
}

// scrollToUp
const btnScrollToTop = document.querySelector("scrollToTop");

scrollToTop.addEventListener("click", function(){
    // windowbtnScrollToTopscrollTo(0,0);

    window.scrollTo({
       top: 0,
       left: 0, 
       behavior: "smooth"
    });
});

