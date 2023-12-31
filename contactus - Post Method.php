<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
<title>Link: Related to issue/safety</title>
<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    font-family: 'Cormorant Garamond' ;
    font-style: normal;
    font-weight: 400;
    background-color: aliceblue;
}
p{
    text-align: center;
    background-color: lightgoldenrodyellow;
}
section{
    height: 100vh;
    width: 100%;
    background-color: aliceblue;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
.image{
    
    width: 100%;
    display: flex;
    align-items: top;
    justify-content: center;
    margin-top: 320px;
}
img {
    height: 200px;
    width: 800px;
    border-radius: 2%;
  }
.container{
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    box-shadow: 0px 0px 20px #00000010;
    background-color: white;
    border-radius: 8px;
    margin-bottom: 20px;
    margin-top: 20px;
}
.form-group{
    width: 400px;
    margin-top: 20px;
    font-size: 20px;
}
.form-group input,
.form-group textarea{
    width: 100%;
    padding: 5px;
    font-size: 14px;
    border: 1px solid rgba(128, 128, 128, 0.199);
    margin-top: 5px;
}
textarea{
    resize: vertical;
}
button[type="submit"]{
    width: 100%;
    border: none;
    outline: none;
    padding: 20px;
    font-size: 24px;
    border-radius: 8px;
    font-family: 'Courier New', Courier, monospace;
    color: rgb(27, 166, 247);
    text-align: center;
    cursor: pointer;
    margin-top: 10px;
    transition: 0.3s ease background-color;
}
button[type="submit"]:hover{
    background-color: rgb(214, 226, 236);
}
#status{
    width: 90px;
    max-width: 500px;
    text-align: center;
    padding: 10px;
    margin: 0 auto;
    border-radius: 8px;
}
#status.success{
    background-color: rgb(211, 250, 153);
    animation: status 4s ease forwards;
}
#status.error {
  background-color: rgb(250, 129, 92);
  color: white;
  animation: status 4s ease forwards;
}
@keyframes status {
  0% {
    opacity: 1;
    pointer-events: all;
  }
  90% {
    opacity: 1;
    pointer-events: all;
  }
  100% {
    opacity: 0;
    pointer-events: none;
  }
}
</style>
</head>
<body>
<section>
<span class="image">
    <img src="image1.jpg" alt="This is a image" class="center">
</span>
<div class="container">
    <form action=""  autocomplete="off" method="POST">
        <p>IMPORTANT NOTE: Required Fileds are followed by *
            <br>
            &nbsp Please spare some time to fill the following form for about issue you facing
        </p>
    <div class="form-group">
        <label for="Name">Name*</label>
        <input type="text" id="Name" name="name"  placeholder="Type Your First Name" required >
    </div>
   
    <div class="form-group">
        <label for="email">Email*</label>
        <input type="email" id="email" name="email"  placeholder="Type Your Email" required>
    </div>
    <div class="form-group">
        <label for="contactNumber">Contact Number*</label>
        <input type="number" id="contactNumber" name="contactNumber" placeholder="Type Your contactNumber" required >
    </div>
    <div class="form-group">
        <label for="address">Address*</label>
        <input type="text" id="address" name="address"  placeholder="Type Your address" required >
    </div>
    
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" name="description"  placeholder="Type Your description" cols="30" rows="5"></textarea>
    </div>
    <a href="login.html">
        <button type="submit" name ="sub" >Submit </button>
    </a>
    </form>
</div>
<div id="status" class="success">successfully Data Stored in DB</div>
</section>
</body>
</html>

<?php
if(isset($_POST['sub']))
{
$naam=$_POST['name'];
$em=$_POST['email'];
$cn=$_POST['contactNumber'];
$add=$_POST['address'];
$des=$_POST['description'];

    if($naam!="" && $em!="" && $cn!="" && $add!="" && $des!="" )
{
$query="INSERT INTO STUDENT VALUES ('$naam','$em','$cn','$add','$des')";
$data=mysqli_query($conn,$query);

if($data)
{
    echo "Data inserted into Database";
}
}
else
{
    echo "Failed to insert Data inserted into Database";
}
}
?>