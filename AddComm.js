let Form = document.getElementById("Form");
let ClearBtn = document.getElementById("Clear");
Form.addEventListener("submit", validation);
ClearBtn.addEventListener("click", clear);
let Comm = document.getElementById("Comm");

function clear(){
    document.getElementById('Form').reset();
}

function validation(event){
    if(Comm.value.trim() === ""){
        Comm.style.border = "0.1rem solid red";
        Comm.style.backgroundColor = "rgb(249 216 218)";
        commError.style.display = "block";
        event.preventDefault();
    }
}
//js in separate files