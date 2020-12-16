<?php
include "connection.php";
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User Registration Form | LMS </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>


<body class="login" style="margin-top: -20px;">



    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="post">
                    <h2>User Registration Form</h2><br>

                    <div>
                      <select id="type" name="type" class="form-control">
                        <option value="">Select User Type</option>
                          <option value="Staff">Staff</option>
                          <option value="Student">Student</option>
                          <option value=""></option>
                        </select>
                  </div>
                  <br>
                  <div>
                    <select id="dept" name="dept" class="form-control">
                      <option value="">Select Department</option>
                        <option value="Health Sciences">Health Sciences</option>
                        <option value="Arts, Sciences, and Education">Arts, Sciences, and Education</option>
                        <option value="Business Education">Business Education</option>
                        <option value="Criminal Justice Education">Criminal Justice Education</option>
                        <option value=""></option>
                      </select>
                </div>
                <br>
                <div>
                  <select id="yrlvl" name="yrlvl" class="form-control" placeholder="Year Level">
                    <option value="">Select Year Level</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value=""></option>
                    </select>
              </div>
              <br>
                    <div>
                        <input type="text" class="form-control" placeholder="FirstName" name="firstname" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="MiddleName" name="middlename" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="LastName" name="lastname" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder="Username-Please use Firstname as Username" name="username" required=""/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Email" name="email"/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Contact" name="contact" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="ID No." name="enrollmentno" required=""/>
                    </div>
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Register">
                    </div>
                    <div class="col-lg-12  col-lg-push-3">
                        <a href="login.php">Back to Main Page</a>
                    </div>

                </form>
            </section>


            <?php

                if(isset($_POST['submit1']))
                {

                    mysqli_query($link, "insert into student_registration values('','$_POST[type]','$_POST[dept]','$_POST[yrlvl]','$_POST[firstname]','$_POST[middlename]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','$_POST[enrollmentno]','WAITING','0',' ')");
                    ?>
                    <div class="alert alert-success col-lg-12 col-lg-push-0">
                        Registration successful, wait for approval.
                    </div>



<?php
                  }
 ?>





    </div>


</body>
</html>
