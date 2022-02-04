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


//contact form
$('#conForm').validate({
    rules: {
        conname:{
            required: true,
            minlength: 4,
            maxlength: 20
        },
        coneamil:{
            required: true
        },
        concompany:{
            required: true,
            minlength: 2,
        },
        conurl:{
            required: true,
        },
        conmessage:{
            required: true,
            minlength: 10
        }
        

    },
    messages: {
        conname: {
            required: "Name cannot be blank",
            minlength : "Name must be at least 4 characters",
            maxlength : "Name must be under 20 characters"
        },
        coneamil:{
            required: "Email cannot be blank"
        },
        concompany:{
            required: "Company name cannot be blank",
            minlength: "Please use at least 2 character"
        },
        conurl:{
            required: "You must give web address",
        },
        conmessage:{
            required: "Message cannot be blank",
            minlength: "Message must be at least 10 characters"
        }
    }




});