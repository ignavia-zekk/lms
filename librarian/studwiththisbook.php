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
}include "connection.php";
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
                                <h2>List of Users with this Book</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
<?php
$res=mysqli_query($link, "select * from issue_books where bname='$_GET[bname]' && brdate='' ");
echo "<table class='table table-bordered'>";
echo "<tr>";
echo "<th>"; echo "Name"; echo"</th>";
echo "<th>"; echo "Enrollment No."; echo"</th>";
echo "<th>"; echo "Book Title"; echo"</th>";
echo "<th>"; echo "Book Code"; echo"</th>";
echo "<th>"; echo "Email"; echo"</th>";
echo "<th>"; echo "Contact"; echo"</th>";
echo "<th>"; echo "Book Issue Date"; echo"</th>";
echo "</tr>";
while($row=mysqli_fetch_array($res))
{
  // code...
  echo "<tr>";
  echo "<td>"; echo $row["sname"]; echo "</td>";
  echo "<td>"; echo $row["senrollment"]; echo "</td>";
  echo "<td>"; echo $row["bname"]; echo "</td>";
    echo "<td>"; echo $row["code"]; echo "</td>";
  echo "<td>"; echo $row["semail"]; echo "</td>";
  echo "<td>"; echo $row["scontact"]; echo "</td>";
  echo "<td>"; echo $row["bissuedate"]; echo "</td>";
  echo "</tr>";
}
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
