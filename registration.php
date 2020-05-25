<?php
include("include/header.php");
?>

<div align="center">
    <b>Type Your information</b>
    <form method="post" action="registration2.php">
        <table border="1">
            <tr>
                <td align="center">User Information Entry Form</td>
            </tr>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name" size="20"></td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td><input type="text" name="email" size="25"></td>
                        </tr>
                        <tr>
                            <td>password</td>
                            <td><input type="text" name="password" size="20"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><input type="text" name="address" size="40"></td>
                        </tr>
                        <tr>
                            <td>Married</td>
                            <td>
                                <select name="maritalstatus">
                                    <option value="Married">Married</option>
                                    <option value="Unmarried">Unmarried</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="right"><input type="submit" name="submit" value="Sent"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<span class="title">Registration</span><br/>
Look! here is some link. Click to get related website <br/>
Computer Learning Center is a sixteen-year old Educational Institute.  We offer basic computer training, in the form of our Career Enhancement Program (CEP) and Professional Certifications such as Graphics design, video editing, and Web Page.   Whether you are looking for a career change, a new job, a promotion or to update your skills in the workplace, we have the program you need.

<?php
include("include/footer.php");
?>
