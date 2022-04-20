//Functions used while using Login button in Enmployer Login Page
function SeekerLogin() {
    var seeker_emailLogin = document.form_seekerlogin.seeker_email_login;
    var seeker_passLogin = document.form_seekerlogin.seeker_pass_login;

    //Defining some standard formats
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (seeker_emailLogin.value.length != 0) {
        if (seeker_passLogin.value.length != 0) {
            if (seeker_emailLogin.value.match(mailformat)) {
                return true;
            } else {
                alert("You have entered an invalid email address");
                document.form_seekerlogin.seeker_email_login.focus();
                return false;
            }
        } else {
            alert("Password field is compulsary");
            document.form_seekerlogin.seeker_pass_login.focus();
            return false;
        }
    } else {
        alert("Username field is compulsary");
        document.form_seekerlogin.seeker_email_login.focus();
        return false;
    }
}