let Form = document.getElementById("Form");
Form.addEventListener("submit", validation);
let Username = document.getElementById("Username");
let Password = document.getElementById("Password");

function validation(event){
    if(Username.value.trim() === ""){
        Username.style.border = "0.1rem solid red";
        Username.style.backgroundColor = "rgb(249 216 218)";
        usernameError.style.display = "block";
        event.preventDefault();
    }
    else if(Password.value.trim() === ""){
        Password.style.border = "1px solid red";
        Password.style.backgroundColor = "rgb(249 216 218)";
        passwordError.style.display = "block";
        event.preventDefault();
    }
    if(Username.value.trim() !== ""){
        Username.style.border = "0.1rem solid rgb(160 115 80)";
        Username.style.backgroundColor = "white";
        usernameError.style.display = "none";
    }
    if(Password.value.trim() !== ""){
        Password.style.border = "0.1rem solid rgb(160 115 80)";
        Password.style.backgroundColor = "white";
        passwordError.style.display = "none";        
    }
}