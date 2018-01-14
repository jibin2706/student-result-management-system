function validate() {
    var username = document.login.userid.value;
    var password = document.login.password.value;
    var classes = document.login.class.value;
    var rn = document.login.rn.value;
    if (username == "" || password == "" || rn="" ||  classes = "") {
        alert('Please fill the form');
    }
}