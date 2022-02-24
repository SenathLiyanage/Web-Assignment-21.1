function access()
{
    if(document.form1.name.value.length<1)
    {
        window.alert("User Name cannot be empty.");
    }
    if(document.form1.pass.value.length<1)
    {
        window.alert("Password cannot be empty.");
    }
    else if(document.form1.pass.value.length<4)
    {
        window.alert("Password cannot be less than 6 characters.");
    }
    else if(document.form1.pass.value!="pass")
    {
        window.alert("The password you have entered is incorrect.");
    }
    else
    {
        window.open("Home page.html");
    }
}