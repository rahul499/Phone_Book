<?php


error_reporting(0);
include 'conn.php';

$sql = " SELECT * FROM contactinfo ";

$query = mysqli_query($con, $sql);

$total = mysqli_num_rows($query);

$start=0;
$limit=4;

?>


<!DOCTYPE html>
<html>
<head>

<SCRIPT language="JavaScript">
function home1() {
        window.location.href="index.php";
}
</SCRIPT>

<script defer src="js/script.js"></script>
  <title>RM-PhoneBook</title>

<link rel="stylesheet" href="css/index.css">
<style>

td, th {
padding:12px;
border: 3px #2b2b2b solid;
}

.searchterm {
  width: 510px;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 10px;
  height: 60px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: white;
}

.uli {
  list-style-type: none;
  margin: 120px;
  padding: 10px;
  overflow: hidden;
  background-color: pink;
  margin-top:10px;
}

.lia{
  padding:8px;
  margin-left:30px;
}
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding:18px 40px;
  margin-right:10px;
  margin-left:1500px;
  border: 4px black;
  cursor: pointer;
  width: 200px;
  opacity: 0.9;
}

.searchterm:focus{
  color: pink;
}

.searchbutton {
  width: 55px;
  height: 55px;
  padding:9px 4px;
  margin-top:18px;
  border: 1px solid #00B4CC;
  background: pink;
  text-align: center;
  color: black;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 35px;
  top:45%;
}

.wrap{
  width: 60%;
  position: absolute;
  top: 8%;
  left: 58%;
  transform: translate(-50%, -50%);
}


</style>
</head>
<body>


<div class="list">
<ul style="color:white;">
<li><img src="images/logo.jpg" style="width:40px; height:40px; padding:2px; margin-right:10px;"></li>
<li><h2>RM-PhoneBook</h2></li>
<li><button class="registerbtn" onclick="javascript:home1();">Home</a></li>
</ul>
</div>

<div id="mydiv">

<div class="wrap">
   <div class="search">
    <?php
     
    if(isset($_GET['idd']))
{
  $idd=$_GET['idd'];
  $start=($idd-1)*$limit;
}
else
{
  $idd=1;
}
$page=ceil($total/$limit);


     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql1 = "SELECT * FROM contactinfo WHERE name LIKE '%$searchKey%'";
     }else
     {
     $sql1 = "SELECT * FROM contactinfo limit $start,$limit"; 
       $searchKey = "";
     }

     $result = mysqli_query($con, $sql1);

    ?>



    <form action="" method="GET"> 
      <input type="text" name="search" class="searchterm" placeholder="Who are you looking for?" style="font-size: 20px; color:black;" >
      <button  class="searchbutton" >
        <i class="fa fa-search"></i>
      </button>
    </form>
   </div>
</div><br>
  <button data-modal-target="#modal" id ="submit" style="margin:15px;">Add Contact</button>
 <div class="modal" id="modal">
    <div class="modal-header">
      <div class="title">Add Contact</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
        <div class="main-content">
        <br>
        <form class="form-register" method="post" action="insertdata.php">

            <div class="form1">

                <div class="form-white-background" style="background-color: white;">
                    <div class="form-row">
                        <label>
                            <span>Name</span>
                            <input type="text" name="name" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Date of Birth</span>
                            <input type="text" name="dob" placeholder="YYYY/MM/DD" >
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Mobile 1</span>
                            <input type="text" name="mobile1" pattern="[0-9]{10}" required>
                        </label>
                    </div>

                     <div class="form-row">
                        <label>
                            <span>Mobile 2</span>
                            <input type="text" name="mobile2" pattern="[0-9]{10}" >
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email 1</span>
                            <input type="email" name="email1" >
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email 2</span>
                            <input type="email" name="email2" >
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
  </div>
  <div id="overlay"></div>

<div class="container">
  <div ><br><br>
    <div class="row"> 
        
    </div><br>
    <center>
    <table class ="tablee" >
       
      

      <?php

while ($res = mysqli_fetch_array($result)) {
?>
<center>
      <tr class="text-dark">
       <h5> 
        <th width="14%"><?php echo $res['name'] ?></th>
        <th><?php echo $res['dob'] ?></th>
        <th><?php echo $res['mobile1'] ?></th>
        <th><a  href="update.php?id=<?php echo $res['number']; ?>" class="text-white"><button data-modal-target="#mod" id="submit">More</button></a></th></h5>
      </tr>
    </center>
  
<?php }
  
?>

    </table><br>

<ul class ="uli">

<li class="lia"><a href="?idd=1">First</a></li>


<?php if($id > 1) {?> <li class="lia"><a href="?idd=<?php echo ($idd-1) ?>">Previous</a></li> 
<?php }?>
 
   <?php
   for($i=1;$i <= $page;$i++){
   ?>
    <li class="lia"><a href="?idd=<?php echo $i ?>"><?php echo $i;?></a></li>
    <?php
   }
    ?>
  
  <?php if($idd!=$page)
  //3!=4
  {?> 
    <li class="lia"><a href="?idd=<?php echo ($idd+1); ?>">Next</a></li>
  <?php }?>
  
  <li class="lia"><a href="?idd=<?php echo $page; ?>">Last</a></li>
</ul>
  </div>
</div>
</div>



 


</body>
</html>