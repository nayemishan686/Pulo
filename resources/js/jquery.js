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

//Login form validation
$('#cFrom').validate({
    rules: {
        cusername:{
            required: true,
            minlength: 4,
            maxlength: 20,

        },
        cemail: {
            required: true,
            
        },
        cpassword: {
            required: true,
            minlength: 5,
        },
        cpasswordConfirm: {
            required: true,
            equalTo: '#cpassword',
        }
    },
    messages: {
        cusername: {
            required: "Username cannot be blank",
            minlength: "username must be at least 4 characters",
            maxlength : "username must be at least under 20 characters"
        },
        cemail: {
            required: "Email cannot be blank",
        },
        cpassword: {
            required: "Password cannot be blank",
            minlength: "password must be at least 5 characters",
        },
        cpasswordConfirm: {
            equalTo: "Password doesn't match",
        }
    }


});