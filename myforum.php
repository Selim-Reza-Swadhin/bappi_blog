<?php
include("include/header.php");
?>
<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "onlineuser"; // Database name
$tbl_name = "tropics"; // Table name
$conn = mysqli_connect("$host", "$username", "$password", "$db_name") or die("cannot connect");

$sql = "SELECT * FROM $tbl_name ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>
<div align="center">
    <b>Look here is a index of tropics</b>
    <table border="2" align="center" cellpadding="3" cellspacing="1"
           style="background-color:red; border-color:green; width:70%">
        <tr>
            <td width="6%" align="center" bgcolor="PowderBlue"><strong>ID</strong></td>
            <td width="45%" align="center" bgcolor="PowderBlue"><strong>Tropic</strong></td>
            <td width="13%" align="center" bgcolor="PowderBlue"><strong>Views</strong></td>
            <td width="13%" align="center" bgcolor="PowderBlue"><strong>Comments</strong></td>
            <td width="15%" align="center" bgcolor="PowderBlue"><strong>Date/Time</strong></td>
        </tr>

        <?php
        while ($rows = mysqli_fetch_assoc($result)) { // Start looping table row
            ?>
            <tr>
                <td bgcolor="PowderBlue"><?= $rows['id']; ?></td>
                <td bgcolor="PowderBlue" title="Click for details"><a
                            href="comments.php?id=<?= $rows['id']; ?>" style="text-decoration: none;"><?= $rows['tropic']; ?></a><BR></td>
                <td align="center" bgcolor="PowderBlue"><?= $rows['view']; ?></td>
                <td align="center" bgcolor="PowderBlue"><?= $rows['reply']; ?></td>
                <td align="center" bgcolor="PowderBlue"><?= $rows['date_time']; ?></td>
            </tr>

            <?php
// Exit looping and close connection
        }
        mysqli_close($conn);
        ?>
        <tr>
            <td colspan="5" align="right" bgcolor="PowderBlue"><a href="tropics.php"  style="text-decoration: none;"><strong>Click me to create a New
                        Tropic</strong> </a></td>
        </tr>
    </table>
</div>

<?php include("include/footer.php");?>
