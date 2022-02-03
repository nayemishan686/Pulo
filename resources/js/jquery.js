//Sticky menu
window.addEventListener('scroll', function(){
    var header = document.querySelector(".navbar");
    header.classList.toggle("sticky", window.scrollY > 150)

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


//Login form validation
$('#lForm').validate({
    rules: {
        lemail:{
            required: true,
        },
        lpassword:{
            required: true,
        }
    },
    messages: {
        lemail: {
            required: "useremail cannot be blank",
        },
        lpassword:{
            required: "Password cannot be blank",
        }
    }
});