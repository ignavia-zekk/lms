<?php
include "connection.php";
$id=$_GET["id"];
$a=date("y-M-d");
date_default_timezone_set("Asia/Manila");
$b = date("h:i:s A");
$res=mysqli_query($link, "update issue_books set brdate='$a' where id=$id");
$res=mysqli_query($link, "update issue_books set rettime='$b' where id=$id");
$bname="";
$senrollment="";
$res=mysqli_query($link, "select * from issue_books where id=$id");
        mysqli_query($link, "select * from student_registration where id=$id");
while($row=mysqli_fetch_array($res))
{
$bname=$row["bname"];
$senrollment=$row["senrollment"];
}
mysqli_query($link, "update add_books set available_qty=available_qty+1 where book_title='$bname' ");
mysqli_query($link, "update student_registration set brbooks=brbooks-1 where enrollment='$senrollment' ");
?>
<script type="text/javascript">
window.location="returnbook.php";

</script>
