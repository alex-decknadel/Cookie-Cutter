/*
Title: Validation
Name: Alex Decknadel
Chemeketa Community College
Class: CIS295
Date: 04/25/2017
Description: This document will handle the
             validation of the form on the
             Join page on the website.
*/

function validator(theForm) {
    var alertsay = "";
    if (theForm.username.value == "") {
        alert("You must enter an Username.");
        theForm.username.focus();
        return (false);
    }
    
    if (theForm.username.value.length < 5) {
        alert("Please enter at least 5 characters in the \"Username\" field.");
        theForm.username.focus();
        return (false);
    }

    var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    var checkStr = theForm.username.value;
    var allValid = true;
    for (i = 0; i < checkStr.length; i++) {
        ch = checkStr.charAt(i);
        for (j = 0; j < checkOK.length; j++)
            if (ch == checkOK.charAt(j))
                break;
        if (j == checkOK.length) {
            allValid = false;
            break;
        }
    }

    if (!allValid) {
        alert("Please enter only letter and numeric characters in the \"UserName\" field.");
        theForm.username.focus();
        return (false);
    }

    // require at least 5 characters in the password field
    if (theForm.password.value.length < 5) {
        alert("Please enter at least 5 characters in the \"Password\" field.");
        theForm.password.focus();
        return (false);
    }

    // check if both password fields are the same
    if (theForm.password.value != theForm.confirm.value) {
        alert("The two passwords do not match.");
        theForm.confirm.focus();
        return (false);
    }

    // check if Email field is blank
    if (theForm.email.value == "") {
        alert("Please enter a value for the \"Email\" field.");
        theForm.email.focus();
        return (false);
    }


    // test if valid Email address, must have @ and .
    var checkEmail = "@.";
    var checkStr = theForm.email.value;
    var emailValid = false;
    var emailAt = false;
    var emailPeriod = false;
    for (i = 0; i < checkStr.length; i++) {
        ch = checkStr.charAt(i);
        for (j = 0; j < checkEmail.length; j++) {
            if (ch == checkEmail.charAt(j) && ch == "@")
                emailAt = true;
            if (ch == checkEmail.charAt(j) && ch == ".")
                emailPeriod = true;
            if (emailAt && emailPeriod)
                break;
            if (j == checkEmail.length)
                break;
        }
        // if both the @ and . were in the string
        if (emailAt && emailPeriod) {
            emailValid = true
            break;
        }
    }

    if (!emailValid) {
        alert("Please enter a valid Email address");
        theForm.email.focus();

        return (false);
    }

    return (true);
}