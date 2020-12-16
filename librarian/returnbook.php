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
                                <h2>Return Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <form name="form1" action="" method="post">
                                <table class="table table-bordered">
                      <tr>
                        <td>
                          <select name="enr" class="form-control">
                            <?php
                            $res=mysqli_query($link,"select * from issue_books where brdate=' ' ");
                            while($row=mysqli_fetch_array($res))
                            {
                              echo "<option>";
                              echo $row["senrollment"];
                              echo "</option>";
                            }

                             ?>
                          </select>
                        </td>
                        <td>
                      <input type="submit" name="submit1" class="btn btn-default submit" value="Search" style="background-color: blue; color: white;">
                        </td>
                      </tr>
                                </table>

                              </form>
<?php
if(isset($_POST["submit1"]))
{
  $res=mysqli_query($link,"select * from issue_books where senrollment=$_POST[enr] && brdate='' order by id desc");
echo "<table class='table table-bordered'>";
echo "<tr>";
echo "<th>";echo "User Type"; echo"</th>";
echo "<th>";echo "Department and Year Level"; echo"</th>";
echo "<th>";echo "ID No."; echo"</th>";
echo "<th>"; echo "Name"; echo"</th>";
echo "<th>"; echo "Contact"; echo"</th>";
echo "<th>"; echo "Email"; echo"</th>";
echo "<th>"; echo "Book Title"; echo"</th>";
echo "<th>"; echo "Book Code"; echo"</th>";
echo "<th>"; echo "Book Issue Date"; echo"</th>";
echo "<th>"; echo "Book Return Date"; echo"</th>";
echo "<th>"; echo "Book Issue Time"; echo"</th>";
echo "<th>"; echo "Book Return Time"; echo"</th>";
echo "</tr>";
  while($row=mysqli_fetch_array($res))
  {
echo "<tr>";
echo "<td>";  echo $row["utype"]; echo "</td>";
echo "<td>";  echo $row["deptyr"]; echo "</td>";
echo "<td>";  echo $row["senrollment"]; echo "</td>";
echo "<td>";  echo $row["sname"]; echo "</td>";
echo "<td>";  echo $row["scontact"]; echo "</td>";
echo "<td>";  echo $row["semail"]; echo "</td>";
echo "<td>";  echo $row["bname"]; echo "</td>";
echo "<td>";  echo $row["code"]; echo "</td>";
echo "<td>";  echo $row["bissuedate"]; echo "</td>";
echo "<td>";  echo $row["trgtdt"]; echo "</td>";
echo "<td>";  echo $row["isstime"]; echo "</td>";
echo "<td>";  echo $row["trgttm"]; echo "</td>";
echo "<td>";   ?> <a href="return.php?id=<?php echo $row["id"]; ?>"> Return Book </a> <?php echo "</td>";

echo "</tr>";
}
echo "</table>";
}
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
