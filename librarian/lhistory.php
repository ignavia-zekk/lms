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
                                <h2>Transaction History</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <table class="table table-bordered">
<th>User Type</th>
<th>College and Year Level</th>
<th>ID No.</th>
<th>Name</th>
<th>Book Title</th>
<th>Book Code</th>
<th>Book Issue Date</th>
<th>Book Return Date</th>
<th>Book Issue Time</th>
<th>Book Return Time</th>
<?php
$res=mysqli_query($link,"select * from issue_books order by id desc" );
while ($row=mysqli_fetch_array($res))
{
  // code...
  echo "<tr>";
  echo "<td>";
  echo $row["utype"];
  echo "</td>";
  echo "<td>";
  echo $row["deptyr"];
  echo "</td>";
  echo "<td>";
  echo $row["senrollment"];
  echo "</td>";
  echo "<td>";
  echo $row["sname"];
  echo "</td>";
echo "<td>";
echo $row["bname"];
echo "</td>";
echo "<td>";
echo $row["code"];
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
