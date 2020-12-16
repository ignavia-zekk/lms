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
                                <h2>Display and Search Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
<form name="form1" action="" method="post">
  <input type="text" name="t1"  class="form-control" placeholder="Enter Book Details">
  <input type="submit" name="submit1" value="Search Book" class="btn btn-default">

</form>



<?php

if(isset($_POST["submit1"]))

{
  $res=mysqli_query($link, "select * from add_books where book_author like('%$_POST[t1]%') or book_title like('%$_POST[t1]%')");
  echo "<table class='table table-bordered'>";
  echo "<tr>";
  echo "<th>"; echo "ISBN"; echo "</th>";
  echo "<th>"; echo "Book Title"; echo "</th>";
  echo "<th>"; echo "Book Author"; echo "</th>";
  echo "<th>"; echo "Book Publisher"; echo "</th>";
  echo "<th>"; echo "Book Edition"; echo "</th>";
  echo "<th>"; echo "Book Year"; echo "</th>";
  echo "<th>"; echo "Book Quantity"; echo "</th>";
  echo "<th>"; echo "Available Quantity"; echo "</th>";
  echo "<th>"; echo "Delete Books"; echo "</th>";
  echo "</tr>";
  while ($row=mysqli_fetch_array($res))
  {
  echo "<tr>";
  echo "<td>"; echo $row["ISBN"]; echo "</td>";
    echo "<td>"; echo $row["book_title"]; echo "</td>";
    echo "<td>"; echo $row["book_author"]; echo "</td>";
    echo "<td>"; echo $row["book_publication"]; echo "</td>";
    echo "<td>"; echo $row["edition"]; echo "</td>";
    echo "<td>"; echo $row["year"]; echo "</td>";
    echo "<td>"; echo $row["book_qty"]; echo "</td>";
    echo "<td>"; echo $row["available_qty"]; echo "</td>";
    echo "<td>"; ?> <a href="delbook.php?id=<?php echo $row["id"]; ?>">Delete Book</a><?php echo "</td>";
  echo "</tr>";
  }
  echo "</table>";
}
else
{

$res=mysqli_query($link,"select * from add_books");
echo "<table class='table table-bordered'>";
echo "<tr>";
echo "<th>"; echo "ISBN"; echo "</th>";
echo "<th>"; echo "Book Title"; echo "</th>";
echo "<th>"; echo "Book Author"; echo "</th>";
echo "<th>"; echo "Book Publisher"; echo "</th>";
echo "<th>"; echo "Book Edition"; echo "</th>";
echo "<th>"; echo "Book Year"; echo "</th>";
echo "<th>"; echo "Book Quantity"; echo "</th>";
echo "<th>"; echo "Available Quantity"; echo "</th>";
echo "<th>"; echo "Delete Books"; echo "</th>";
echo "</tr>";
while ($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>"; echo $row["ISBN"]; echo "</td>";
echo "<td>"; echo $row["book_title"]; echo "</td>";
echo "<td>"; echo $row["book_author"]; echo "</td>";
echo "<td>"; echo $row["book_publication"]; echo "</td>";
echo "<td>"; echo $row["edition"]; echo "</td>";
echo "<td>"; echo $row["year"]; echo "</td>";
echo "<td>"; echo $row["book_qty"]; echo "</td>";
echo "<td>"; echo $row["available_qty"]; echo "</td>";
  echo "<td>"; ?> <a href="delbook.php?id=<?php echo $row["id"]; ?>">Delete Book</a> <?php echo "</td>";
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



<?php
  include "footer.php";
 ?>
