<?php
session_start();
if (!isset($_SESSION["librarian"]))
{
  // code...
?>
<script type="text/javascript">
window.location="login.php";
</script>
<?php
}
include "connection.php";
  include "header.php";
?>

        <!-- main content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>PLT LIBRARY</h3>
                    </div>
                   </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <div class="x_title">
                                <h2>Books Issued to Users</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
<?php
$i=0;
$res=mysqli_query($link, "select * from add_books");
echo "<table class='table table-bordered'>";
echo "<tr>";
while ($row=mysqli_fetch_array($res))
{
// code..
$i=$i+1;
echo "<td>";
?> <img src="../librarian/<?php echo $row["book_img"]; ?>" height="100" width="100"> <?php
echo "<br>";
echo "<b>".$row["book_title"]."</b>";
echo "<br>";
echo "<b>"."Total Books:".$row["book_qty"]."</b>";
echo "<br>";
echo "<b>"."Available:".$row["available_qty"]."</b>";
echo "<br>";
?> <a href="studwiththisbook.php?bname=<?php echo $row["book_title"]; ?>" style="color: blue;">Users with this Book</a><?php
echo "</td>";

if ($i==6)
{
// code...
echo "<tr>";
echo "</tr>";
$i=0;
}
}
echo "</tr>";
echo "</table>";


 ?>
              </div>
             </div>
              </div>
             </div>
             </div>
             </div>
        <!-- main content -->



<?php
  include "footer.php";
 ?>
