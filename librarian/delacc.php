<?php
include "connection.php";
if (isset($_GET["id"])){
  $id=$_GET["id"];
  mysqli_query($link, "delete from student_registration where id='$id' ");
  ?>
  <script type="text/javascript">
  window.location="disp_stud_info.php";

  </script>
  <?php
} else {
?>
<script type="text/javascript">
window.location="disp_stud_info.php";
</script>
<?php
}
