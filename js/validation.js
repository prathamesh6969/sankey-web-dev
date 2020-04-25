var flag_name = 0;
var flag_email = 0;
var flag_contact = 0;
var flag_comment = 0;

function nameValidation(){
    if((/^[a-zA-Z]+( [a-zA-Z]+)*$/.test(myform.name.value)) || (myform.name.value == "")){
         $("#name").css({"border" : "1px solid #707070",
        "margin-bottom" : "2vh"});
         $(".name-error").css({
         "display" : "none",
         });
         flag_name = 1;
         return (true);
    }
    $("#name").css({
        "border" : "1px solid red",
        "margin" : "0 0 0.5rem"
    });
     $(".name-error").css({
         "display" : "block",
         "color" : "red",
         "font-family" : "gilroylight"
     });
     flag_name = 0;
     return (false); 
}
function emailValidation(){
     if((/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myform.email.value))  || (myform.email.value == ""))
     {
         $("#email").css({"border" : "1px solid #707070",
        "margin-bottom" : "2vh"});
         $(".email-error").css({
         "display" : "none",
         });
         flag_email = 1;
         return (true);
     }
     $("#email").css({"border" : "1px solid red",
        "margin" : "0 0 0.5rem"});
     $(".email-error").css({
         "display" : "block",
         "color" : "red",
         "font-family" : "gilroylight"
     });
     flag_email = 0;
     return (false);
 }
function contactValidation(){
     if((/^\+[1-9]{1}[0-9]{3,14}$/.test(myform.contact.value))  || (myform.contact.value == ""))
     {
         $("#contact").css({"border" : "1px solid #707070",
        "margin-bottom" : "2vh"});
         $(".contact-error").css({
         "display" : "none",
         });
         flag_contact = 1;
         return (true);
     }
     $("#contact").css({"border" : "1px solid red",
        "margin" : "0 0 0.5rem"});
     $(".contact-error").css({
         "display" : "block",
         "color" : "red",
         "font-family" : "gilroylight"
     });
     flag_contact = 0;
     return (false);
 }
function commentValidation(){
     if((/^\s*(?:\S\s*){1,500}$/.test(myform.comment.value))  || (myform.comment.value == ""))
     {
         $("#comment").css({"border" : "1px solid #707070",
        "margin-bottom" : "2vh"});
         $(".comment-error").css({
         "display" : "none",
         });
         flag_comment = 1;
         return (true);
     }
     $("#comment").css({"border" : "1px solid red",
        "margin" : "0 0 0.5rem"});
     $(".comment-error").css({
         "display" : "block",
         "color" : "red",
         "font-family" : "gilroylight"
     });
     flag_comment = 0;
     return (false);
 }