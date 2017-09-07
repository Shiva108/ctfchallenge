function validateForm(){
    var correctPassphrase = "veryhardtoguess";
    var passphrase = document.myForm.passphrase;
    if (passphrase.value == ""){
        alert("You must input a passphrase into the field");
    }

    else if (passphrase.value == correctPassphrase){
        alert("Correct Pass - Next stage is coming up!");
        window.location.href='stage2.php';
        return false;
            
    }

    else {
        alert("Invalid passphrase - Ah ah try again");
    }
}
