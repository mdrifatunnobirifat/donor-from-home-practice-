function handlesubmit() {
    var f_name = document.getElementById("f_name").value.trim();
    var l_name = document.getElementById("l_name").value.trim();
    var email = document.getElementById("email").value.trim();
    var city = document.getElementById("city").value.trim();
    var address = document.getElementById("address").value.trim();
    var phone = document.getElementById("phone").value.trim();

    if (f_name === "" || l_name === "" || email === "" || city === "" || address === "" || phone === "") {
        alert("Please fill in all the required fields.");
        return false;
    }

    if (!isNaN(f_name)) {
        alert("First name must be text.");
        return false;
    }

    if (!isNaN(l_name)) {
        alert("Last name must be text.");
        return false;
    }

    if (!email.includes("@")) {
        alert("Please enter a valid email.");
        return false;
    }

    if (isNaN(phone) || phone.length !== 11) {
        alert("Phone number must be 11 digits.");
        return false;
    }

    return true;
}
