function validateForm(){
    var correctUsername = "5102b6478a52b43ec33b46e031e63c8f";
    var correctPassword = "cc34833db97d03c8e62ce290c0f0cd29";

    var username = document.login.username;
    var password = document.login.password;

    if (username.value == correctUsername && password.value == correctPassword){
        alert("Correct User & Pass! Next Stage loading!");
        window.location.href='r0WaWNnc80r4xpXm.php';
        return false;
    }

    else {
        alert("No no no! U didnt say the magic word!");
    }
}
