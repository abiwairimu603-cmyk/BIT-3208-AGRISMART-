function validateForm() {

    let username = document.getElementById("username").value;

    if (username === "") {
        alert("Username is required");
        return false;
    }

    alert("TASK 1 WORKING SUCCESSFULLY");
    return true;
}

// PASSWORD STRENGTH CHECKER
document.addEventListener("DOMContentLoaded", function () {

    let password = document.getElementById("password");
    let strength = document.getElementById("strength");

    if (!password || !strength) {
        console.log("Password elements not found");
        return;
    }

    password.addEventListener("input", function () {

        let value = password.value;

        if (value.length < 6) {
            strength.innerHTML = "Weak Password";
            strength.style.color = "red";
        }
        else if (value.match(/[A-Z]/) && value.match(/[0-9]/)) {
            strength.innerHTML = "Strong Password";
            strength.style.color = "green";
        }
        else {
            strength.innerHTML = "Medium Password";
            strength.style.color = "orange";
        }

    });

});