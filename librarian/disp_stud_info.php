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
  include "header.php";
  include "connection.php";
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
                    </div>
                   </div>
                   </div>
                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <div class="x_title">
                                <h2>Users</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <form name="form1" action="" method="post">
                                <input type="text" name="t1"  class="form-control" placeholder="Enter User Details">
                                <input type="submit" name="submit1" value="Search User" class="btn btn-default">
                              </form>
                              <?php
                              if(isset($_POST["submit1"]))
                              {
                                $res=mysqli_query($link, "select * from student_registration where username like('%$_POST[t1]%') or enrollment like('%$_POST[t1]%')");
                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                echo "<th>"; echo "User Type"; echo "</th>";
                                echo "<th>"; echo "College"; echo "</th>";
                                echo "<th>"; echo "Year Level"; echo "</th>";
                                echo "<th>"; echo "Firstname"; echo "</th>";
                                echo "<th>"; echo "Middlename"; echo "</th>";
                                echo "<th>"; echo "Lastname"; echo "</th>";
                                echo "<th>"; echo "Username"; echo "</th>";
                                echo "<th>"; echo "Email"; echo "</th>";
                                echo "<th>"; echo "Contact"; echo "</th>";
                                echo "<th>"; echo "ID No."; echo "</th>";
                                echo "<th>"; echo "Borrowed Quantity"; echo "</th>";
                                echo "<th>"; echo "Fines"; echo "</th>";
                                echo "<th>"; echo "Status"; echo "</th>";
                                echo "<th>"; echo "Approve"; echo "</th>";
                                echo "<th>"; echo "Suspend"; echo "</th>";
                                echo "<th>"; echo "Delete Books"; echo "</th>";
                                echo "</tr>";
                                while ($row=mysqli_fetch_array($res))
                                {
                                echo "<tr>";
                                echo "<td>"; echo $row["type"]; echo "</td>";
                                echo "<td>"; echo $row["dept"]; echo "</td>";
                                echo "<td>"; echo $row["yrlvl"]; echo "</td>";
                                echo "<td>"; echo $row["firstname"]; echo "</td>";
                                echo "<td>"; echo $row["middlename"]; echo "</td>";
                                echo "<td>"; echo $row["lastname"]; echo "</td>";
                                echo "<td>"; echo $row["username"]; echo "</td>";
                                echo "<td>"; echo $row["email"]; echo "</td>";
                                echo "<td>"; echo $row["contact"]; echo "</td>";
                                echo "<td>"; echo $row["enrollment"]; echo "</td>";
                                echo "<td>"; echo $row["brbooks"]; echo "</td>";
                                echo "<td>"; echo $row["fines"]; echo "</td>";
                                echo "<td>"; echo $row["status"]; echo "</td>";
                                echo "<td>"; ?> <a href="approve.php?id=<?php echo $row["id"] ?>">Approve</a><?php echo "</td>";
                                echo "<td>"; ?> <a href="disapprove.php?id=<?php echo $row["id"] ?>">Suspend</a><?php echo "</td>";
                                echo "<td>"; ?> <a href="delacc.php?id=<?php echo $row["id"] ?>">Delete Account</a><?php echo "</td>";
                                echo "</tr>";
                                }
                                echo "</table>";
                                }
                              else
                              {
                                $res=mysqli_query($link, "select * from student_registration");
                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                echo "<th>"; echo "User Type"; echo "</th>";
                                echo "<th>"; echo "College"; echo "</th>";
                                echo "<th>"; echo "Year Level"; echo "</th>";
                                echo "<th>"; echo "Firstname"; echo "</th>";
                                echo "<th>"; echo "Middlename"; echo "</th>";
                                echo "<th>"; echo "Lastname"; echo "</th>";
                                echo "<th>"; echo "Username"; echo "</th>";
                                echo "<th>"; echo "Email"; echo "</th>";
                                echo "<th>"; echo "Contact"; echo "</th>";
                                echo "<th>"; echo "ID No."; echo "</th>";
                                echo "<th>"; echo "Borrowed Quantity"; echo "</th>";
                                echo "<th>"; echo "Fines"; echo "</th>";
                                echo "<th>"; echo "Status"; echo "</th>";
                                echo "<th>"; echo "Approve"; echo "</th>";
                                echo "<th>"; echo "Suspend"; echo "</th>";
                                echo "<th>"; echo "Delete Account"; echo "</th>";
                                echo "</tr>";
                              while ($row=mysqli_fetch_array($res))
                              {
                                echo "<tr>";
                                echo "<td>"; echo $row["type"]; echo "</td>";
                                echo "<td>"; echo $row["dept"]; echo "</td>";
                                echo "<td>"; echo $row["yrlvl"]; echo "</td>";
                                echo "<td>"; echo $row["firstname"]; echo "</td>";
                                echo "<td>"; echo $row["middlename"]; echo "</td>";
                                echo "<td>"; echo $row["lastname"]; echo "</td>";
                                echo "<td>"; echo $row["username"]; echo "</td>";
                                echo "<td>"; echo $row["email"]; echo "</td>";
                                echo "<td>"; echo $row["contact"]; echo "</td>";
                                echo "<td>"; echo $row["enrollment"]; echo "</td>";
                                echo "<td>"; echo $row["brbooks"]; echo "</td>";
                                echo "<td>"; echo $row["fines"]; echo "</td>";
                                echo "<td>"; echo $row["status"]; echo "</td>";
                                echo "<td>"; ?> <a href="approve.php?id=<?php echo $row["id"] ?>">Approve</a><?php echo "</td>";
                                echo "<td>"; ?> <a href="disapprove.php?id=<?php echo $row["id"] ?>">Suspend</a><?php echo "</td>";
                                echo "<td>"; ?> <a href="delacc.php?id=<?php echo $row["id"] ?>">Delete Account</a><?php echo "</td>";
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
