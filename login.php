<?php
include("include/header.php");
?>

    <html>
    <head>
        <title>Log in Page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
    <br/>
    <br/>
    <font color="green">Type Your Name And Password</font>
    <br><br>
    <form method="post" action="logincheck.php">
        Name <input type="text" name="name" id="name"/>
        Password <input type="password" name="password" id="password"/>
        <input type="submit"/>
    </form>

    <br/> <font face="Virdana" color="red">After register You have to login first.
        if you are logged in . you will get some extra facilities. </font><br/>
    <ul>
        <li style="list-style:none;"> Such as</li>
        <li style="list-style:none;"> Such as</li>
        <li style="list-style:none;"> Such as</li>
        <li style="list-style:none;"> Such as</li>
    </ul>
    <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>

<?php
include("include/footer.php");
?>