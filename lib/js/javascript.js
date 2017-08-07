function validateForm() {
    var x = document.forms["form"]["fname"].value;
    if (x == "") {
        alert("Please fill out information");
        document.getElementById('fname').style.backgroundColor = 'red';
        return false;
    }
    var x = document.forms["form"]["lname"].value;
    if (x == "") {
        alert("Please fill out information");
        document.getElementById('lname').style.backgroundColor = 'red';
        return false;
    }
    var x = document.forms["form"]["Company"].value;
    if (x == "") {
        alert("Please fill out information");
        document.getElementById('Company').style.backgroundColor = 'red';
        return false;
    }
    var x = document.forms["form"]["email"].value;
    if (x == "") {
        alert("Please fill out information");
        document.getElementById('email').style.backgroundColor = 'red';
        return false;
    }
}
