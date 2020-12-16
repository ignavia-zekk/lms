<?php
include "connection.php";
if (isset($_GET["id"])){
  $id=$_GET["id"];
  mysqli_query($link, "delete from reservebooks where id='$id' ");
  ?>
  <script type="text/javascript">
  window.location="rsrv.php";

  </script>
  <?php
} else {
?>
<script type="text/javascript">
window.location="rsrv.php";
</script>
<?php
}
