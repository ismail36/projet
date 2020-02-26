


var counter = 0;

var bt = document.getElementById("btn");

bt.addEventListener("click", function(){
    var nameJS = document.getElementById("name").value;
    var surnameJS = document.getElementById("surname").value;
    var emailJS = document.getElementById("email").value;
    var pwdJS = document.getElementById("pwd").value;
    var cnfrm_pwdJS = document.getElementById("cnfrm_pwd").value;

    if(nameJS==""){
        alert("Please write your name !!");
    }else if(surnameJS == ""){
        alert("Please write your surname !!");
    }else if(emailJS == ""){
        alert("Please write your email !!");
    }else if(pwdJS == ""){
        alert("Please write your password !!");
    }else if(cnfrm_pwdJS == ""){
        alert("Please confirm password !!");
    }else if(pwdJS != cnfrm_pwdJS){
        alert("Password not matched !!");
    }else {
        counter++;
        alert(counter);
    }
})



