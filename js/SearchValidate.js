// JavaScript Document

function QuickSearchValidate() {
    var name = document.form_quicksearch.quick_key;
    var location = document.getElementById("location");

    if (name.value.length == "" && location.value == "") {
        alert("Require both, Key Skill and Location field.");
        document.form_quicksearch.quick_key.focus();
        return false;



    } else {
        return true;
    }
}