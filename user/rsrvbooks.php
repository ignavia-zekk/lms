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
                                <h2>Request Book</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
<form class="form1" action="" method="post">
<table>
  <tr>
    <td>
<select name="enr" class="form-control selectpicker">
<?php

$res=mysqli_query($link, "select * from student_registration where username='$_SESSION[username]' ");
while ($row=mysqli_fetch_array($res))
{
  // code....
  echo "<option>";
  echo $row["enrollment"];
  echo "</option>";
}

 ?>
</select>
    </td>
    <td>
      <input type="submit" value="Confirm" name="submit1"  class="form-control btn btn-default" style="margin-top: 5px;">
    </td>
  </tr>
</table>


<?php
if(isset($_POST["submit1"]))
{
$res5=mysqli_query($link, "select * from student_registration where enrollment='$_POST[enr]' ");
while($row5=mysqli_fetch_array($res5))
{
  $type=$row5["type"];
  $dept=$row5["dept"];
  $yrlvl=$row5["yrlvl"];
  $firstname=$row5["firstname"];
  $lastname=$row5["lastname"];
  $username=$row5["username"];
  $password=$row5["password"];
  $email=$row5["email"];
  $contact=$row5["contact"];
  $enrollment=$row5["enrollment"];
  $_SESSION["senrollment"]=$enrollment;
  $_SESSION["suname"]=$username;
}

?>
<table class="table table-bordered">
<tr>
  <td>
    <input type="text" class="form-control" placeholder="Enrollment No." name="senrollment" value="<?php  echo $enrollment; ?>" disabled>
  </td>
</tr>
<tr>
  <td>
    <input type="text" class="form-control" placeholder="User Type" name="utype" value="<?php  echo $type; ?>">
  </td>
</tr>
<tr>
  <td>
    <input type="text" class="form-control" placeholder="Dept and Year" name="deptyr" value="<?php  echo $dept.' '.$yrlvl; ?>">
  </td>
</tr>
<tr>
  <td>
    <input type="text" class="form-control" placeholder="Student Name" name="sname" value="<?php  echo $firstname.' '.$lastname; ?>" required>
  </td>
</tr>
<tr>
  <td>
    <input type="text" class="form-control" placeholder="Student Contact" name="scontact" value="<?php  echo $contact; ?>" required>
  </td>
</tr>
<tr>
  <td>
    <input type="text" class="form-control" placeholder="Student Email" name="semail" value="<?php  echo $email; ?>" required>
  </td>
</tr>
<tr>
  <td>
    <select name="bname" class="form-control selectpicker">
      <?php
      $res=mysqli_query($link, "select book_title from add_books");
      while($row=mysqli_fetch_array($res))
      {
      echo "<option>";
echo $row["book_title"];
        echo "</option>";
      }
 ?>
  </select>
  </td>
</tr>

<tr>
  <td>
    <span>Issue Date</span>
    <input type="text" class="form-control" placeholder="Issue Date" name="bissuedate" value="<?php  echo date("y-M-d") ?>" required>
  </td>
</tr>
<tr>
  <td>
<span>Return Date</span>
    <input type="text" class="form-control" placeholder="Return date" name="trgtdt" value="<?php
    $dates = array(date('y-M-d'), date('y-M-d', strtotime('+1day')), date('y-M-d', strtotime('+2days')), date('y-M-d', strtotime('+3days')));
    foreach($dates as $val)
    {
    $conv = strtotime($val);
    $dt_name = date('l', $conv);
    $date_return = "";
      if($dt_name == "Sunday")
     {
         $date_return = date('y-M-d', strtotime($val.'+1days'));
     }
     else
     {
       $date_return = date('y-M-d', strtotime('+3days'));
     }
    }
     echo $date_return;
     $sql = "insert into issue_books values('$date_return')";
?>" required>
  </td>
</tr>
<tr>
  <td>
<span>Issue Time</span>
    <input type="text" class="form-control" placeholder="Issue Time" name="isstime" value="<?php
    date_default_timezone_set("Asia/Manila");
    echo date("h:i:s A"); ?>" required>
  </td>
</tr>
<tr>
  <td>
<span>Return Time</span>
    <input type="text" class="form-control" placeholder="Return Time" name="trgttm" value="<?php
    date_default_timezone_set("Asia/Manila");
    echo date("h:i:s A"); ?>" required>
  </td>
</tr>
<tr>
  <td>
    <input type="text" class="form-control" placeholder="Student Username" name="suname" value="<?php  echo $username; ?>" disabled>
  </td>
</tr>
<tr>
  <td>
    <input type="submit" value="Request"
              name="submit2" class="form-control btn btn-default"  style="background-color: blue; color:white;">
  </td>
</tr>
</table>


<?php
}

 ?>
 </form>
 <?php
if(isset($_POST["submit2"]))
{
$res=mysqli_query($link, " select * from add_books where book_title='$_POST[bname]' ");
while($row=mysqli_fetch_array($res))
{
$qty=$row["available_qty"];
}

if($qty==0)
{
  ?>
  <div class="alert alert-danger col-lg-6 col-lg-push-3">
      <strong style="color:white">Book is Out of Stock</strong>
  </div>
  <?php
}
else
{
  mysqli_query($link, "insert into reservebooks values(' ' , '$_SESSION[senrollment]' , '$_POST[sname]' ,'$_POST[deptyr]','$_POST[utype]',  '$_POST[scontact]' , '$_POST[semail]' , '$_POST[bname]', '$_POST[bissuedate]' ,' ' , '$_SESSION[suname]','$_POST[code]','$_POST[isstime]',' ','$_POST[trgtdt]','$_POST[trgttm]') ");

?>
<script type="text/javascript">
alert("Book Issued Successfully");
window.location.href=window.location.href;
</script>
<?php
}
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
