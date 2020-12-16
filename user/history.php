<?php
session_start();
if (!isset($_SESSION["username"]))
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

                    <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                    </div>
                   </div>
                   </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <div class="x_title">
                                <h2>My History</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <table class="table table-bordered">
<th>Book Author</th>
<th>Book Title</th>
<th>Books Issue Date</th>
<th>Books Return Date</th>
<th>Book Issue Time</th>
<th>Book Return Time</th>
<?php
$res=mysqli_query($link,"select * from issue_books where suname='$_SESSION[username]' order by id desc");
while ($row=mysqli_fetch_array($res))
{
  // code...
  echo "<tr>";
echo "<td>";
echo $row["senrollment"];
echo "</td>";
echo "<td>";
echo $row["bname"];
echo "</td>";
echo "<td>";
echo $row["bissuedate"];
echo "</td>";
echo "<td>";
echo $row["brdate"];
echo "</td>";
echo "<td>";
echo $row["isstime"];
echo "</td>";
echo "<td>";
echo $row["rettime"];
echo "</td>";

  echo "</tr>";
}

 ?>


                                </table>
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
