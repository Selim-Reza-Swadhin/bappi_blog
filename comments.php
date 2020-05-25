<?php
require_once 'include/header.php';
?>

<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "onlineuser"; // Database name
$tbl_name = "tropics"; // Table name

$conn = mysqli_connect("$host", "$username", "$password", "$db_name") or die("cannot connect");

//============ Table name tropics ==================

$id = $_GET['id'];
$sql = "SELECT * FROM $tbl_name WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($result);
?>
    <div align="center"><span class="title">Look here is Tropics and Comments</span><br/>

    <table width="400" border="2" align="center" cellpadding="0" cellspacing="1" bgcolor="red">
        <tr>
            <td>
                <table width="100%" border="1" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#F8F7F1">
                    <tr>
                        <td bgcolor="PowderBlue" style="text-align: center"><strong><?= $rows['tropic']; ?></strong></td>
                    </tr>

                    <tr>
                        <td bgcolor="PowderBlue" style="text-align: justify"><?= $rows['detail']; ?></td>
                    </tr>

                    <tr>
                        <td bgcolor="PowderBlue"><strong>By :</strong> <?= $rows['name']; ?> <br> <strong>Email
                                : </strong><?= $rows['email']; ?>
                        </td>
                    </tr>

                    <tr>
                        <td bgcolor="PowderBlue" style="text-align: center"><strong>Date/time : </strong><?= $rows['date_time']; ?></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <BR>
    <?php
    //============ Table name comments ==================

    $tbl_name2 = "comments";
    $sql2 = "SELECT * FROM $tbl_name2 WHERE question_id='$id'";
    $result2 = mysqli_query($conn, $sql2);
    while ($rows = mysqli_fetch_assoc($result2)) {
        ?>
        <table width="400" border="2" align="center" cellpadding="0" cellspacing="1" bgcolor="red">
            <tr>
                <td>
                    <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="red">
                        <tr>
                            <td width="18%" bgcolor="PowderBlue"><strong>Name</strong></td>
                            <td width="5%" bgcolor="PowderBlue">:</td>
                            <td width="77%" bgcolor="PowderBlue"><?= $rows['a_name']; ?></td>
                        </tr>
                        <tr>
                            <td bgcolor="PowderBlue"><strong>Email</strong></td>
                            <td bgcolor="PowderBlue">:</td>
                            <td bgcolor="PowderBlue"><?= $rows['a_email']; ?></td>
                        </tr>
                        <tr>
                            <td bgcolor="PowderBlue"><strong>Comments</strong></td>
                            <td bgcolor="PowderBlue">:</td>
                            <td bgcolor="PowderBlue"><?= $rows['a_answer']; ?></td>
                        </tr>
                        <tr>
                            <td bgcolor="PowderBlue"><strong>Date/Time</strong></td>
                            <td bgcolor="PowderBlue">:</td>
                            <td bgcolor="PowderBlue"><?= $rows['a_datetime']; ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table><br>
        <?php  } ?>
    <tr>
        <td colspan="5" align="right" bgcolor="PowderBlue"><a href="myforum.php" style="text-decoration: none;"><strong>Click me, For go to my forum page</strong> </a></td>
    </tr>
    <br>
    <?php
    //============ Table name tropics ==================

    $sql3 = "SELECT view FROM $tbl_name WHERE id='$id'";
    $result3 = mysqli_query($conn, $sql3);

    $rows = mysqli_fetch_assoc($result3);
    $view = $rows['view'];
    if (empty($view)) {
        $view = 1;
        $sql4 = "INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
        $result4 = mysqli_query($conn, $sql4);
    }
    $addview = $view + 1;
    $sql5 = "update $tbl_name set view='$addview' WHERE id='$id'";
    $result5 = mysqli_query($conn, $sql5);

    $conn->close();
    ?>

<!--    ========================== Comment Form =========================-->

    <BR>
    <table width="400" border="2" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
        <tr>
            <form name="form1" method="post" action="viewcomments.php">
                <td>
                    <table width="100%" border="1" cellpadding="3" cellspacing="1" bgcolor="PowderBlue">
                        <tr>
                            <td width="18%"><strong>Name</strong></td>
                            <td width="3%">:</td>
                            <td width="79%"><input name="a_name" type="text" id="a_name" size="45"></td>
                        </tr>
                        <tr>
                            <td><strong>Email</strong></td>
                            <td>:</td>
                            <td><input name="a_email" type="text" id="a_email" size="45"></td>
                        </tr>
                        <tr>
                            <td valign="top"><strong>Comments</strong></td>
                            <td valign="top">:</td>
                            <td><textarea name="a_answer" cols="45" rows="3" id="a_answer"></textarea></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input name="id" type="hidden" value="<?= $id; ?>"></td>
                            <td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2"
                                                                                          value="Reset"></td>
                        </tr>
                    </table>
                </td>
            </form>
        </tr>
    </table>
    <br>

<?php
include("include/footer.php");
?>