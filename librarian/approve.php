<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link, "update student_registration set status='APPROVE' where id=$id");

?>
<script type="text/javascript">
window.location="disp_stud_info.php";
</script>
