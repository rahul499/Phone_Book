<?php


error_reporting(0);
include 'conn.php';


    $id = $_GET['id'];


$q="select * from contactinfo where number = $id";
$query = mysqli_query($con,$q);
$res=mysqli_fetch_array($query);


     if(isset($_POST['done'])){
        $n = $_POST['name'];
        $d = $_POST['dob'];
       $m1 = $_POST['mobile1'];
       $m2 = $_POST['mobile2'];
        $e = $_POST['email1'];
        $e2 = $_POST['email2'];

       $q2= "update contactinfo set
name='$n', dob='$d', mobile1 ='$m1', mobile2 ='$m2', email1 ='$e', email2 ='$e2' where number ='$id' ";

       mysqli_query($con, $q2);

       header("location:index.php");
     }

     if(isset($_POST['del'])){

       $q3 = " DELETE FROM contactinfo WHERE number = $id ";

mysqli_query($con,$q3);

header("location:index.php");
     }

?>


<!DOCTYPE html>
<html>
<head>


<style>
* {box-sizing: border-box}

.container {
  padding: 16px;
}

.list{
  align-content: center;
  background-color:#4f3222;
}
#mydi {
    position:fixed;
    top: 26%;
    left: 37%;
    width:60em;
    height:50em;
    margin-top: -9em; 
    margin-left: -15em; 
    border: 1px solid #ccc;
    background-color: #f3f3f3;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  font-size:16px;
  background: white;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 18px 40px;
  margin-right:55px;
  margin-left:132px;
  border: 4px black;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.register {
  background-color: #4CAF50;
  color: white;
  padding: 16px 40px;
  margin-right:25px;
  margin-left:1500px;
  border: 4px black;
  cursor: pointer;
  width: 200px;
  opacity: 0.9;
}

.register:hover {
  opacity:1;
}

.registerbtn:hover {
  opacity:2;
}

a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}

.header {
padding: 50px;
font-size: 50px;
text-align: center;
background: white;
background-repeat: no-repeat;
background-size: cover;
border: 5px solid black;
}

.lib{
    float:center;
    border:4px;
}
</style>

<link rel="stylesheet" href="css/index.css">
  <title>RM-PhoneBook</title>

<SCRIPT language="JavaScript">
function home() {
        window.location.href="index.php";
}
</SCRIPT>

</head>
<body>


<div class="list">
<ul style="color:white;">
<li><img src="images/logo.jpg" style="width:40px; height:40px; padding:2px; margin-right:10px;"></li>
<li><h2>RM-PhoneBook</h2></li>
<li><button class="register" onclick="javascript:home();">Home</a></li>
</ul>
</div>

<div id="mydi">

   <form  method="post" action=" ">
  <div class="container">
   <center> <h1 style="font-size:40px; color:black; font-family: Impact, Charcoal, sans-serif;"> Contact Details</h1></center><br>

    <label for="name"><b>Name</b></label>
    <input type="text"  name="name" value="<?php echo $res['name']; ?>" >

    <label for="birthdate"><b>Date of Birth</b></label>
    <input type="text" name="dob"  value="<?php echo $res['dob']; ?>" >

    <label for="mobile"><b>Mobile Number 1</b></label>
    <input type="text" name="mobile1" value="<?php echo $res['mobile1']; ?>" >

    <label for="mobile"><b>Mobile Number 2</b></label>
    <input type="text" name="mobile2" value="<?php echo $res['mobile2']; ?>" >

   <label for="email"><b>Email 1</b></label>
    <input type="text" name="email1" value="<?php echo $res['email1']; ?>"  >

    <label for="email"><b>Email 2</b></label>
    <input type="text" name="email2" value="<?php echo $res['email2']; ?>"  >


    <hr>
</form>
 <div >
<ul class="list">
  <center>
    <li class="lib"><button class="registerbtn" name="done">Update</a></li>
     <li class="lib"><button class="registerbtn" name="del">Remove</a></li>
</a></li> </center>
</ul>
</div>
  </div> 
</div>

 


</body>
</html>-
