function showForms(){
    
    if (document.getElementById("passForm").style.display == "block") {
        document.getElementById("passForm").style.display = "none";
    }else{
        document.getElementById("passForm").style.display = "block";
    }
    if (document.getElementById("emailForm").style.display == "block") {
        document.getElementById("emailForm").style.display = "none";
    }else{
        document.getElementById("emailForm").style.display = "block";
    }
}