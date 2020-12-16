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
                                <h2>Add Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            <form name="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">


<table class="table table-bordered">
  <tr>
    <td><input type="text" class="form-control" placeholder="ISBN" name="IBN" required=""></td>
  </tr>
<tr>
  <td><input type="text" class="form-control" placeholder="Book Title" name="btitle" required=""></td>
</tr>
<tr>
  <td><input type="text" class="form-control" placeholder="Author" name="author"   required=""></td>
</tr>
<tr>
  <td><input type="text" class="form-control" placeholder="Publisher" name="publisher"   required=""></td>
</tr>
<tr>
  <td><input type="text" class="form-control" placeholder="Quantity" name="quantity"   required=""></td>
</tr>
<tr>
  <td><input type="text" class="form-control" placeholder="Available" name="available"   required=""></td>
</tr>
<tr>
  <td><input type="text" class="form-control" placeholder="Edition" name="edition"   required=""></td>
</tr>
<tr>
  <td><input type="text" class="form-control" placeholder="Year" name="year"   required=""></td>
</tr>
<tr>
  <td><input type="submit" name="submit1" class="btn btn-default submit" value="Add Book" style="background-color: blue; color: white;"></td>
</tr>
</table>
  </form>
              </div>
             </div>
              </div>
             </div>
             </div>
             </div>

<?php
if (isset($_POST["submit1"]))

{
mysqli_query($link,"insert into add_books values(' ','$_POST[ISBN]','$_POST[btitle]',$_POST[author]','$_POST[publisher]','$_POST[quantity]','$_POST[available]','$_SESSION[librarian]','$_POST[edition]','$_POST[year]')");

?>
<script type="text/javascript">
alert ("Book Added Successfully");
</script>
<?php


}
?>


<?php
  include "footer.php";
 ?>
