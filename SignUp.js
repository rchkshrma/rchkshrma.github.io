let Form = document.getElementById("Form");
Form.addEventListener("submit", validation);
let Username = document.getElementById("Username");
let Password = document.getElementById("Password");
let repeat = document.getElementById("RePassword");

function validation(event){
    if(Username.value.trim() === ""){
        error(Username);
        
        noError(Password);
        passwordError.style.display = "none";  
        passwordLength.style.display = "none"  

        noError(repeat);
        repasswordError.style.display = "none";  
        noMatch.style.display = "none"; 
        
        usernameError.style.display = "block";
        event.preventDefault();
    }
    else if(Password.value.trim() === ""){
        error(Password);

        noError(Username);
        usernameError.style.display = "none";
        usernameLength.style.display = "none";

        noError(repeat);
        repasswordError.style.display = "none";  
        noMatch.style.display = "none"; 

        passwordError.style.display = "block";
        event.preventDefault();
    }
    else if(repeat.value.trim() === ""){
        error(repeat);
        
        noError(Username);
        usernameError.style.display = "none";
        usernameLength.style.display = "none";
        
        noError(Password);
        passwordError.style.display = "none";  
        passwordLength.style.display = "none"  

        repasswordError.style.display = "block";
        event.preventDefault();
    }
    else if(Username.value.length < 3 || Username.value.length > 30){
        error(Username);
        
        noError(Password);
        passwordError.style.display = "none";  
        passwordLength.style.display = "none"  

        noError(repeat);
        repasswordError.style.display = "none";  
        noMatch.style.display = "none";
        
        usernameLength.style.display = "block";
        event.preventDefault();
    }
    else if(Password.value.length < 3 || Password.value.length > 30){
        error(Password);

        noError(Username);
        usernameError.style.display = "none";
        usernameLength.style.display = "none";

        noError(repeat);
        repasswordError.style.display = "none";  
        noMatch.style.display = "none";

        passwordLength.style.display = "block";
        event.preventDefault();
    }
    else if(Password.value !== repeat.value){
        error(repeat);
        
        noError(Username);
        usernameError.style.display = "none";
        usernameLength.style.display = "none";
        
        noError(Password);
        passwordError.style.display = "none";  
        passwordLength.style.display = "none"  
        
        noMatch.style.display = "block";
        event.preventDefault();
    }
    
    if(Username.value.trim() !== "" && Username.value.length >= 3 && Username.value.length <= 30){
        noError(Username);
        usernameError.style.display = "none";
        usernameLength.style.display = "none";
    }
    if(Password.value.trim() !== "" && Password.value.length >= 3 && Password.value.length <= 30){
        noError(Password);
        passwordError.style.display = "none";  
        passwordLength.style.display = "none"      
    }
    if(repeat.value.trim() !== "" && Password.value === repeat.value){
        noError(repeat);
        repasswordError.style.display = "none";  
        noMatch.style.display = "none";      
    }
}

function error(element){
    element.style.border = "1px solid red";
    element.style.backgroundColor = "rgb(249 216 218)";
}

function noError(element){
    element.style.border = "0.1rem solid rgb(160 115 80)";
    element.style.backgroundColor = "white";
}