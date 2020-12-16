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
                                <h2>Requests</h2>

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
                                $res=mysqli_query($link, "select * from reservebooks where sname like('%$_POST[t1]%') or senrollment like('%$_POST[t1]%')");
                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                echo "<th>"; echo "User Type"; echo "</th>";
                                echo "<th>"; echo "Dept and Year Level"; echo "</th>";
                                echo "<th>"; echo "ID No."; echo "</th>";
                                echo "<th>"; echo "Name"; echo "</th>";
                                echo "<th>"; echo "Book Title"; echo "</th>";
                                echo "</tr>";
                                while ($row=mysqli_fetch_array($res))
                                {
                                echo "<tr>";
                                echo "<td>"; echo $row["utype"]; echo "</td>";
                                echo "<td>"; echo $row["deptyr"]; echo "</td>";
                                echo "<td>"; echo $row["senrollment"]; echo "</td>";
                                echo "<td>"; echo $row["sname"]; echo "</td>";
                                echo "<td>"; echo $row["bname"]; echo "</td>";
                                echo "<td>"; ?> <a href="issuebookpage.php?id=<?php echo $row["id"]; ?>">Issue</a> <?php echo "</td>";
                                echo "<td>"; ?> <a href="deleterequest.php?id=<?php echo $row["id"] ?>">Delete Request</a><?php echo "</td>";

                                echo "</tr>";
                                }
                                echo "</table>";
                                }
                            else
                            {
                          $res=mysqli_query($link, "select * from reservebooks");
                          echo "<table class='table table-bordered'>";
                          echo "<tr>";
                          echo "<th>"; echo "User Type"; echo "</th>";
                          echo "<th>"; echo "Dept and Year Level"; echo "</th>";
                          echo "<th>"; echo "ID No."; echo "</th>";
                          echo "<th>"; echo "Name"; echo "</th>";
                          echo "<th>"; echo "Book Title"; echo "</th>";
                          echo  "</tr>";
                          while($row=mysqli_fetch_array($res))
                          {
                            echo "<tr>";
                            echo "<td>"; echo $row["utype"]; echo "</td>";
                            echo "<td>"; echo $row["deptyr"]; echo "</td>";
                            echo "<td>"; echo $row["senrollment"]; echo "</td>";
                            echo "<td>"; echo $row["sname"]; echo "</td>";
                            echo "<td>"; echo $row["bname"]; echo "</td>";
                            echo "<td>"; ?> <a href="issuebookpage.php?id=<?php echo $row["id"]; ?>">Issue</a> <?php echo "</td>";
                            echo "<td>"; ?> <a href="deleterequest.php?id=<?php echo $row["id"] ?>">Delete Request</a><?php echo "</td>";
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
