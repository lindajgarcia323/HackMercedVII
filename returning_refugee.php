<!DOCTYPE html>
<html>
 <head>
        <title> Returning Refugee </title>
 </head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width">
 <style>
 body {
  background-color: #0072B2;
  margin: 0;
 }
 .container{
   margin: 25px;
   height: relative;
   position: relative;
   font-family: arial;
   font-size: 24px;
   width: relative;
 }
 .center{
   margin: 0;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   transform: translate(-50%, -50%);
 }
 h1{
   text-align: center;
   font-family: Monaco;
   font-size: 36px;
   font-weight: bold;
 }
 h3{
   font-family: Monaco;
   font-size: 27px;
 }
 .Search_btn{
   background-color: #D39C93;
   border: none;
   color: black;
   padding: 24px 75px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   font-family: Courier New;
 }
 .Search_btn:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.Submit_btn{
   background-color: #D39C93;
   border: none;
   color: black;
   padding: 18px 60px;
   text-align: center;
   text-decoration: none;
   display: inline-block;
   font-size: 16px;
   font-family: Courier New;
 }
 .Submit_btn:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.content {
        padding:40px;
}
img {
  border: 2.5px dashed black;
}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #0072B2;
  border-bottom: 2.5px solid black;
  outline: none;
  font-family: Monaco;
  font-size: 12px;
}
 .header {
  padding: 20px;
  overflow: hidden;
  background: #D39C93;
  color: black;
  font-size: 15px;
}
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}
.header a.logo {
  font-size: 20px;
  text-align: left;
  font-family: Monaco;
  font-weight: bold;
  color: #0072B2;
}
.header-right {
  float: right;
  font-size: 15px;
  text-decoration: none;
  font-family: Monaco;
  outline: none;
  background-color: #0072B2;
  line-height: 25px;
  border-radius: 4px;
}
.header-right a:hover {
  background-color: #E0E1E2;
  color: black;
}
hr.solid {
  height:1px;
  border-width:0;
  background-color: black;
}
 </style>
 <body>
 <div class="header">
  <a class="logo"> OkHelp ⚐ </a>
  <div class="header-right">
                <a href="/index.html">Home</a>
        </div>
</div>
<h1>Host Information</h1>
<hr class ="solid">
<form method="post" action="returning_refugee.php">
    <label for="id">Please Enter Your ID: </label><br>
      <input type="text" id="id" name="identification"><br>
    <input type = "submit" name="submit" value="Submit">
  </form>
<?php
  include "dbConn.php"; // Using database connection file here
  if(isset($_POST['submit']))
  {
    $id = $_POST['identification'];
    $query = "SELECT * FROM hosts WHERE id = $id";
    $result = mysqli_query($db, $query);
    
    $data =  mysqli_fetch_row($result);
  }
  mysqli_close($db);
?>
<div class="content"> 
   <h3>Contacts</h3>
    <p style="font-family:'Courier New'"> Location: <?php echo $data['1']; ?> </p>
    <p style="font-family:'Courier New'"> Name: <?php echo $data['2']; ?> </p>
    <p style="font-family:'Courier New'"> Description: <?php echo $data['3']; ?> </p>
    <p style="font-family:'Courier New'"> Languages: <?php echo $data['8']; ?> </p>
    <p style="font-family:'Courier New'"> Religion: <?php echo $data['4']; ?> </p>
    <p style="font-family:'Courier New'"> Max # of Refugees: <?php echo $data['5']; ?> </p>
    <p style="font-family:'Courier New'"> Phone #: <?php echo $data['6']; ?> </p>
    <p style="font-family:'Courier New'"> Email: <?php echo $data['7']; ?> </p>
</div>
<div class="content">
   <h3>Directions</h3>
    <p style="font-family:'Courier New'"> Select "Search" button below to begin optimal directions search. </p>
<div class="container">
  <img src="https://developers.arcgis.com/documentation/static/display-a-map-b4974c7cfef498eb43e99ab60191cbaf.png" alt="Map" style="width:100%">
  <div class="center">
        <button class="Search_btn">Search</button>
     <br>
   </div>
</div>
</div>
<div class="content">
   <h3>Updates</h3>
    <form>
  <label for="updates" style="font-family:'Courier New'"> Input any situation updates below for host. </label>
  <input type="text" id="returning_refugee_updates" update="returning_refugee_updates">
</form>
<button class="Submit_btn">Submit</button>
<br>
<br>
   <p style="font-family:'Courier New'"> Host Updates: </p>
</div>
 </body>
 </html>