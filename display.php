<html>
<head>
    <title>Display records</title>
</head>

<body>
    <table border ="2">

<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Contact Number</th>
    <th>Address</th>
    <th>Description</th>
  
</tr>
<?php
include("connection.php");
error_reporting(0);
$query = "select * from student";
$data=mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
// $result = mysqli_fetch_assoc($data);

// echo $result['Name']." ".$result['Email']." ".$result['Contact Number']." ".$result['Address']." ".$result['Description'];
// echo $total;
if($total!=0)
{
    // echo "Table has records";
    while($result = mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['Name']."</td>
        <td>".$result['Email']."</td>
        <td>".$result['Contact Number']."</td>
        <td>".$result['Address']."</td>
        <td>".$result['Description']."</td>
        </tr>
        ";
    }
}
else
{
    echo "No records found";
}

?>
</table>
</body>
</html>