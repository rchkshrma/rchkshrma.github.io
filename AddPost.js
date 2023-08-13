let Form = document.getElementById("Form");
let ClearBtn = document.getElementById("Clear");
Form.addEventListener("submit", validation);
ClearBtn.addEventListener("click", clear);
let Title = document.getElementById("Title");
let Content = document.getElementById("Content");

function clear(){
    document.getElementById('Form').reset();
}

function validation(event){
    if(Title.value.trim() === ""){
        Title.style.border = "0.1rem solid red";
        Title.style.backgroundColor = "rgb(249 216 218)";
        titleError.style.display = "block";
        event.preventDefault();
    }
    else if(Content.value.trim() === ""){
        Content.style.border = "1px solid red";
        Content.style.backgroundColor = "rgb(249 216 218)";
        contentError.style.display = "block";
        event.preventDefault();
    }
    if(Title.value.trim() !== ""){
        Title.style.border = "0.1rem solid rgb(160 115 80)";
        Title.style.backgroundColor = "white";
        titleError.style.display = "none";
    }
    if(Content.value.trim() !== ""){
        Content.style.border = "0.1rem solid rgb(160 115 80)";
        Content.style.backgroundColor = "white";
        contentError.style.display = "none";        
    }
}
//js in separate files