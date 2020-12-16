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
                                <h2>Search Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
<form class="" name="form1" action="" method="post">
<table class="table">
<tr>
  <td>
    <input type="text" name="t1" placeholder="Enter Book Details" class="form-control" value="" required>
  </td>
  <td>
    <input type="submit" name="submit1" value="Search Books" class="form-control btn btn-default">
  </td>
</tr>
</table>
</form>

  <?php
  if (isset($_POST["submit1"]))
  {
    // code..
    $i=0;
$res=mysqli_query($link, "select * from add_books where book_author like('%$_POST[t1]%') or book_title like('%$_POST[t1]%')");
echo "<table class='table table-bordered'>";
echo "<tr>";
while ($row=mysqli_fetch_array($res))
{
// code..
$i=$i+1;
echo "<td>";
echo "<b>"."Title:".$row["book_title"]."</b>";
echo "<br>";
echo "<b>"."Author:".$row["book_author"]."</b>";
echo "<br>";
echo "<b>"."Publisher:".$row["book_publication"]."</b>";
echo "<br>";
echo "<b>"."Edition:".$row["edition"]."</b>";
echo "<br>";
echo "<b>"."Year:".$row["year"]."</b>";
echo "<br>";
echo "<b>"."Book Quantity:".$row["book_qty"]."</b>";
echo "<br>";
echo "<b>"."Available:".$row["available_qty"]."</b>";
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
  }
  else
  {
    // code...
    $i=0;
$res=mysqli_query($link, "select * from add_books");
echo "<table class='table table-bordered'>";
echo "<tr>";
while ($row=mysqli_fetch_array($res))
{
// code..
$i=$i+1;
echo "<td>";
echo "<b>"."Title:".$row["book_title"]."</b>";
echo "<br>";
echo "<b>"."Author:".$row["book_author"]."</b>";
echo "<br>";
echo "<b>"."Publisher:".$row["book_publication"]."</b>";
echo "<br>";
echo "<b>"."Edition:".$row["edition"]."</b>";
echo "<br>";
echo "<b>"."Year:".$row["year"]."</b>";
echo "<br>";
echo "<b>"."Book Quantity:".$row["book_qty"]."</b>";
echo "<br>";
echo "<b>"."Available:".$row["available_qty"]."</b>";
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
