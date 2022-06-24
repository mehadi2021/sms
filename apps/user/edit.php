 <?php
 include_once '../../system/lib/Connection.php';
include_once '../../system/lib/DBContext.php';

if(isset($_GET['id'])){
$id= $_GET['id']; 
$name='';
 $password='';

 
}
  if(isset($_POST['registration']))
  { $name=$_POST['name'];
    $email=$_POST['password'];
  $sql="update user set name='$name',password='$email' where id='$id'";
   $d=new DBContext;
   if($d->insert($sql))
   {
    echo "date updated";
   }
  }
   else
   {
     $v=new DBContext;
     $sql ="select * from user where id = '$id'";
    foreach($v->select($sql) as $value) {
        
       $name= $value['name'];
       $password=$value['password'];
   
   }
  }
    ?>
 <html>

 <head>
  <title>User Update Form </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="../../css/indescss.css">
  <link type="text/css" rel="stylesheet" href="../../css/register.css">
 </head>

 <body>
  <br><br><br><br><br>
  <form method="POST" action="">
   <div class="container reg">

    <!-- <span><?php if($m!='') echo $m; ?></span> -->
    <h3> Update form</h3>
    <hr>

    <div>
     <label>Your Name<span>*</span></label>
     <input name="name" id="name" type="text" placeholder=<?php echo $name ?> required>
    </div>
    <div>
     <label>Your Email</label>
     <input name="password" id="password" type="text" placeholder=<?php echo $password ?> required>
    </div>

    <div style=" text-align: center">
     <p><span>***</span>By creating an account you agree to our Terms & Conditions.</p>
    </div>
    <div style="text-align: center; padding: 20px;">
     <input type="submit" class="btn btn-success" value="Submit" name="registration">
    </div>

    <div style="text-align: center">
     <p>Already have an account? <a href="">Sign in</a></p>
    </div>
   </div>
  </form>
 </body>
 <script type="text/javascript" src="js/script.js"></script>

 </html>


 <script>
$(document).ready(function() {
   $(' .reg').css('color', '#ffce00'); //document.getElementsByClassName('reg')[0].style.color='#ffce00' ; });
   /*window.onload=function(){ document.getElementsByClassName('reg')[0].style.color='#ffce00' ; }; *? */
 </script>