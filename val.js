$(document).ready(function(){
    $("#submit").click(function(){
    var username = $("#username").val().trim();
    var password = $("#password").val().trim();
    
    if( username != "" && password != "" ){
        $.ajax({
            url:'validation.php',
            type:'post',
            data:{username:username,password:password},
            success:function(response){
                var msg = "";
                if(response == 1){
                  window.location = "main_page.php";
                }else{
                    $('#mess').removeClass().attr("hidden", false).toggleClass("alert alert-danger").text("Invalid Username or Password.");
                }
               
            }
        });
    }
    else{
        $('#mess').removeClass().attr("hidden", false).toggleClass("alert alert-warning").text("Please Fill All Fields.");
    }
    });
    });