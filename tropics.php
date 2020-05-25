<?php
include("include/header.php");
?>

    <div align="center">
        <b>Write and Submit Your Tropics</b>

        <table width="400" border="1" align="center" cellpadding="0" cellspacing="1" bgcolor="red">
            <tr>
                <form id="form1" name="form1" method="post" action="viewtropic.php">
                    <td>
                        <table width="100%" border="1" cellpadding="3" cellspacing="1" bgcolor="PowderBlue">

                            <tr>
                                <td width="14%"><strong>Tropic</strong></td>
                                <td width="2%">:</td>
                                <td width="84%"><input name="tropic" type="text" id="topic" size="50"/></td>
                            </tr>
                            <tr>
                                <td valign="top"><strong>Detail</strong></td>
                                <td valign="top">:</td>
                                <td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
                            </tr>
                            <tr>
                                <td><strong>Name</strong></td>
                                <td>:</td>
                                <td><input name="name" type="text" id="name" size="50"/></td>
                            </tr>
                            <tr>
                                <td><strong>Email</strong></td>
                                <td>:</td>
                                <td><input name="email" type="text" id="email" size="50"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>
                                    <input type="submit" name="Submit" value="Submit"/>
                                    <input type="reset" name="Submit2" value="Reset"/>
                                </td>
                           </tr>
                        </table>
                    </td>
                </form>
            </tr>

        </table>
        <br/><br/>
            <tr>
                <td colspan="5" align="right" bgcolor="PowderBlue"><a href="myforum.php" style="text-decoration: none;"><strong>Click me, For go to my forum</strong> </a></td>
            </tr>
        <br/>
        <br/><br/><br/><br/><br/><br/><br/><br/>
        <div>
<?php
include("include/footer.php");
?>